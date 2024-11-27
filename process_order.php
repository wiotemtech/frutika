<?php
// Database connection
$servername = "localhost"; // Replace with your database server if not localhost
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "ordermanagement"; // Your existing database name

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: text/plain'); // Set response content type for debugging

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture POST data with sanitization and validation
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $address = isset($_POST['address']) ? trim($_POST['address']) : '';
    $city = isset($_POST['city']) ? trim($_POST['city']) : '';
    $street = isset($_POST['street']) ? trim($_POST['street']) : '';
    $cart_details = isset($_POST['cart_details']) ? trim($_POST['cart_details']) : '';
    $subtotal = isset($_POST['subtotal']) ? floatval(str_replace('$', '', $_POST['subtotal'])) : 0; // Remove '$' and convert to float
    $shipping = isset($_POST['shipping']) ? floatval(str_replace('$', '', $_POST['shipping'])) : 0; // Remove '$' and convert to float
    $tax = isset($_POST['tax']) ? floatval(str_replace('%', '', $_POST['tax'])) : 0; // Remove '%' and convert to float
    $total = isset($_POST['total']) ? floatval(str_replace('$', '', $_POST['total'])) : 0; // Remove '$' and convert to float
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    $payref = isset($_POST['payref']) ? trim($_POST['payref']) : '';

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($address) || empty($city) || empty($street)) {
        echo "Error: Missing required fields.";
        exit;
    }

    // Debugging: Log received data
    echo "Received Data:\n";
    echo "Name: $name\nEmail: $email\nPhone: $phone\nAddress: $address\nCity: $city\nStreet: $street\n";
    echo "Cart Details: $cart_details\nSubtotal: $subtotal\nShipping: $shipping\nTax: $tax\nTotal: $total\nMessage: $message\n";

    // Database connection using MySQLi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check if connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL query to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO `regular_orders` 
                            (`name`, `email`, `phone`, `address`, `city`, `street`, `cart_details`, `subtotal`, `shipping`, `tax`, `total`, `message`, `payref`) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters to the prepared statement
    $stmt->bind_param("ssssssssdddss", $name, $email, $phone, $address, $city, $street, $cart_details, $subtotal, $shipping, $tax, $total, $message, $payref);

    // Execute the query
    if ($stmt->execute()) {
        echo "Order successfully saved to the database.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
