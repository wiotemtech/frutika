<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Collect form data
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']); // Email from the form
	$address = htmlspecialchars($_POST['address']);
	$city = htmlspecialchars($_POST['city']);
	$street = htmlspecialchars($_POST['street']);
	$phone = htmlspecialchars($_POST['phone']);
	$cartDetails = htmlspecialchars($_POST['cartDetails']);
	$subtotal = htmlspecialchars($_POST['subtotal']);
	$shipping = htmlspecialchars($_POST['shipping']);
	$total = htmlspecialchars($_POST['total']);
	$message = htmlspecialchars($_POST['message']);

	// Email content
	$subject = "New Order from $name";
	$body = "
        Name: $name
        Email: $email
        Phone: $phone
        Address: $address, $street, $city
        
        Cart Details:
        $cartDetails
        
        Subtotal: $subtotal
        Shipping: $shipping
        Total: $total
        
        Additional Info:
        $message
    ";

	$to = "namronny12@gmail.com"; // Replace with the email address to receive the order
	$headers = "From: $email\r\n";
	$headers .= "Reply-To: $email\r\n";

	// Send email
	if (mail($to, $subject, $body, $headers)) {
		echo json_encode(["status" => "success", "message" => "Email sent successfully."]);
	} else {
		echo json_encode(["status" => "error", "message" => "Failed to send email."]);
	}
} else {
	http_response_code(405);
	echo json_encode(["status" => "error", "message" => "Invalid request method."]);
}
?>