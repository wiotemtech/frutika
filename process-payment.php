<?php
// Decode the JSON payload sent by the frontend
$data = json_decode(file_get_contents("php://input"), true);

$data = json_decode(file_get_contents("php://input"), true);
file_put_contents("debug.log", "Received data: " . print_r($data, true), FILE_APPEND);

// Check if the required fields are present in the request
if (!isset($data['token']) || !isset($data['amount'])) {
    echo json_encode(["success" => false, "error" => "Missing required fields"]);
    exit;
}

// Extract the payment token and total amount
$token = $data['token'];
$amount = $data['amount']; // Ensure this is in cents (e.g., $1.00 = 100 cents)

// Check if the amount is valid (should be a positive integer representing cents)
if (!is_numeric($amount) || $amount <= 0) {
    echo json_encode(["success" => false, "error" => "Invalid amount"]);
    exit;
}

// Square API credentials
$accessToken = 'EAAAl7kcFwVNuOzwnlUS3o8Mgq43UcpnzMo5XDu35kiiZ7i9XJOhk7xukasIwHZD'; // Replace with your Square Access Token
$apiUrl = 'https://connect.squareupsandbox.com/v2/payments'; // Use for production

// Create the payment request body
$requestBody = json_encode([
    "idempotency_key" => uniqid(), // Unique key for this payment to avoid duplication
    "amount_money" => [
        "amount" => intval($amount), // Convert the amount to an integer
        "currency" => "USD",         // Replace with your currency code if not USD
    ],
    "source_id" => $token,          // The payment token from the frontend
]);

// Set up the cURL request
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $requestBody);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json",
    "Authorization: Bearer $accessToken",
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    file_put_contents("debug.log", "cURL error: " . curl_error($ch) . "\n", FILE_APPEND);
    
    echo json_encode(["success" => false, "error" => curl_error($ch)]);
    exit;
}

curl_close($ch);

// Parse the API response
$responseData = json_decode($response, true);
file_put_contents("debug.log", "Square API Response: " . print_r($responseData, true), FILE_APPEND);

// Check if the response has the expected structure and payment status
if (isset($responseData['payment']) && $responseData['payment']['status'] === 'COMPLETED') {
    echo json_encode(["success" => true]);
} else {
    // Handle API errors
    $errorDetail = isset($responseData['errors'][0]['detail']) ? $responseData['errors'][0]['detail'] : 'Unknown error';
    echo json_encode(["success" => false, "error" => $errorDetail]);
}
?>
