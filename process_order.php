<?php
header("Content-Type: application/json");

// Get POST data
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Check if input data is valid
if (!$data || !isset($data['cart']) || empty($data['cart'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid or missing data']);
    exit;
}

// Extract and sanitize fields
$firstName = htmlspecialchars($data['firstName'] ?? '');
$email = htmlspecialchars($data['email'] ?? '');
$phone = htmlspecialchars($data['phone'] ?? '');
$shippingAddress = htmlspecialchars($data['shippingAddress'] ?? '');
$billingAddress = htmlspecialchars($data['billingAddress'] ?? '');
$subtotal = floatval($data['subtotal'] ?? 0);
$shipping = floatval($data['shipping'] ?? 0);
$tax = floatval($data['tax'] ?? 0);
$total = floatval($data['total'] ?? 0);
$orderDate = htmlspecialchars($data['orderDate'] ?? '');

if (empty($firstName) || empty($email) || empty($phone) || empty($shippingAddress) || empty($billingAddress)) {
    echo json_encode(['success' => false, 'message' => 'Required fields are missing']);
    exit;
}

// Database connection
$conn = new mysqli('localhost', 'root', 'password', 'your_database');
if ($conn->connect_error) {
    echo json_encode(['success' => false, 'message' => 'Database connection failed']);
    exit;
}

// Prepare the SQL statement
$stmt = $conn->prepare(
    "INSERT INTO orders (customer_first_name, customer_email, customer_phone_number, customer_shipping_address, customer_billing_address, product_name, product_price, quantity, subtotal, shipping, tax, total, order_date) 
     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
);

if (!$stmt) {
    echo json_encode(['success' => false, 'message' => 'Failed to prepare SQL statement']);
    $conn->close();
    exit;
}

// Insert each cart item into the database
$cart = $data['cart'];
foreach ($cart as $item) {
    $productName = htmlspecialchars($item['name'] ?? '');
    $productPrice = floatval($item['price'] ?? 0);
    $quantity = intval($item['quantity'] ?? 0);

    // Bind parameters (ensure the types match the database schema)
    $stmt->bind_param(
        "ssssssiddddds",
        $firstName,
        $email,
        $phone,
        $shippingAddress,
        $billingAddress,
        $productName,
        $productPrice,
        $quantity,
        $subtotal,
        $shipping,
        $tax,
        $total,
        $orderDate
    );

    // Execute and check for errors
    if (!$stmt->execute()) {
        echo json_encode(['success' => false, 'message' => 'Failed to insert order', 'error' => $stmt->error]);
        $stmt->close();
        $conn->close();
        exit;
    }
}

// Success response
echo json_encode(['success' => true, 'message' => 'Order inserted successfully']);
$stmt->close();
$conn->close();
?>
