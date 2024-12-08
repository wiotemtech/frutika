<?php
// Database connection (replace with your actual database credentials)
$servername = "localhost";
$username = "root";  // Change this to your database username
$password = "";      // Change this to your database password
$dbname = "ordermanagement"; // Change this to your database name

// $dbname = 'capsrxrv_kqhahshop';
// $username = 'capsrxrv_shaka';
// $password = '!isihaka1005';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect data from form
$size = $_POST['selected-size'];
$color = $_POST['color'];
$shirtColor = $_POST['shirtcolor'];
$type = $_POST['type'];
$design = $_POST['design'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$payref = $_POST['payref'];
$quantity = $_POST['quantity'];
$total = $_POST['total2'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];

// Insert data into the database
$sql = "INSERT INTO tshirtcustomization (size, color, shirtcolor, type, design, name, email, phone, address, payref, quantity, total, city, zipcode)
VALUES ('$size', '$color', '$shirtColor', '$type', '$design', '$name', '$email', '$phone', '$address', '$payref', '$quantity', '$total', '$city', '$zipcode')";

if ($conn->query($sql) === TRUE) {
    // Display success message
    echo "<script>alert('New record created successfully');</script>";
} else {
    // Display error message
    echo "<script>alert('Error: " . $conn->error . "');</script>";
}


$conn->close();
?>
