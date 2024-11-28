<!-- <?php
// Enable error reporting for debugging -->
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// // Set headers for JSON responses and CORS
// header('Content-Type: application/json');
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: POST');
// header('Access-Control-Allow-Headers: Content-Type');

// Database connection details
// $host = 'localhost';
// $dbName = 'ordermanagement';
// $username = 'root';
// $password = '';

// // Connect to the database
// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     error_log($e->getMessage(), 3, '/path/to/logfile.log');
//     echo json_encode(['status' => 'error', 'message' => 'Database connection failed.']);
//     exit;
// }
// if (isset($_POST['submit_order'])) {

//     // Retrieve form data
//     $baseOil = isset($_POST['baseOil']) ? (string) $_POST['baseOil'] : null;
//     $scentProfile = isset($_POST['scentProfile']) ? (string) $_POST['scentProfile'] : null;
//     $specificFragrance = isset($_POST['specificFragrance']) ? (string) $_POST['specificFragrance'] : null;
//     $intensity = isset($_POST['intensity']) ? (string) $_POST['intensity'] : null;
//     $benefits = isset($_POST['benefits']) ? (string) $_POST['benefits'] : null;
//     $packaging = isset($_POST['packaging']) ? (string) $_POST['packaging'] : null;
//     $size = isset($_POST['size']) ? (string) $_POST['size'] : null;
//     $customName = isset($_POST['customName']) ? (string) $_POST['customName'] : null;
//     $name = isset($_POST['name']) ? (string) $_POST['name'] : null;
//     $email = isset($_POST['email']) ? (string) $_POST['email'] : null;
//     $phone = isset($_POST['phone']) ? (string) $_POST['phone'] : null;
//     $address = isset($_POST['address']) ? (string) $_POST['address'] : null;
//     $quantity = isset($_POST['quantity']) ? (int) $_POST['quantity'] : 1;

    // // Input validation
    // if (empty($name) || empty($email) || empty($phone) || empty($address) || empty($quantity)) {
    //     $err = "Please fill in all required fields!";
    //     header("location:order_form.php?error=$err");
    //     exit;
    // }

    // Using prepared statements for security
//     $query = "INSERT INTO custom_orders (customer_name, customer_email, customer_phone, customer_address, custom_name, specific_fragrance, base_oil, scent_profile, scent_intensity, additional_benefits, packaging, size, quantity) 
//               VALUES (:name, :email, :phone, :address,:customName, :specificFragrance, :baseOil, :scentProfile, :intensity, :benefits, :packaging, :size, :quantity)";
//     $stmt = $conn->prepare($query);

//     // Bind parameters
//     $stmt->bindParam(':baseOil', $baseOil, PDO::PARAM_STR);
//     $stmt->bindParam(':scentProfile', $scentProfile, PDO::PARAM_STR);
//     $stmt->bindParam(':specificFragrance', $specificFragrance, PDO::PARAM_STR);
//     $stmt->bindParam(':intensity', $intensity, PDO::PARAM_STR);
//     $stmt->bindParam(':benefits', $benefits, PDO::PARAM_STR);
//     $stmt->bindParam(':packaging', $packaging, PDO::PARAM_STR);
//     $stmt->bindParam(':size', $size, PDO::PARAM_STR);
//     $stmt->bindParam(':customName', $customName, PDO::PARAM_STR);
//     $stmt->bindParam(':name', $name, PDO::PARAM_STR);
//     $stmt->bindParam(':email', $email, PDO::PARAM_STR);
//     $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
//     $stmt->bindParam(':address', $address, PDO::PARAM_STR);
//     $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);

//     // Execute and handle response
//     if ($stmt->execute()) {
//         $sm = "Order submitted successfully";
//         header("location:custom.php?success=$sm");
//         exit;
//     } else {
//         $err = "Order submission failed. Please try again!";
//         header("location:custom.php?error=$err");
//         exit;
//     }
// }

// // Check if the request method is POST
// //if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Get the raw POST data

//     if ($data) {
//         // Extract and sanitize data
//         $customer_name =($data['customer_name'] ?,
//         $customer_email = ($data['customer_email'] ?? '',
//         $customer_phone = ($data['customer_phone'] ?? '',
//         $customer_address = ($data['customer_address'] ??,
//         $custom_name = ($data['custom_name'] ??,
//         $specific_fragrance = ($data['specific_fragrance'] ?? ,
//         $base_oil = ($data['base_oil'] ?? '',
//         $scent_profile = ($data['scent_profile'] ?? '',
//         $scent_intensity = ($data['scent_intensity'] ?? '',
//         $additional_benefits = ($data['additional_benefits'] ?? '',
//         $packaging = ($data['packaging'] ?? '', 
//         $size = ($data['size'] ?? '',
//         $price = $data['price'] ?? 0;
//         $quantity = $data['quantity'] ?? 1;

//         // Validate required fields
//         if (empty($customer_name) || !filter_var($customer_email, FILTER_VALIDATE_EMAIL) || empty($size) || !is_numeric($price)) {
//             echo json_encode(['status' => 'error', 'message' => 'Missing or invalid required fields.']);
//             exit;
//         }

//         // Calculate total and order date
//         $total = $price * $quantity;
//         $order_date = date('Y-m-d H:i:s');

//         // Insert data into the database
//         try {
//             $stmt = $pdo->prepare("
//                 INSERT INTO custom_orders 
//                 (customer_name, customer_email, customer_phone, customer_address, custom_name, specific_fragrance, base_oil, scent_profile, scent_intensity, additional_benefits, packaging, size, price, quantity, total, order_date) 
//                 VALUES 
//                 (:customer_name, :customer_email, :customer_phone, :customer_address, :custom_name, :specific_fragrance, :base_oil, :scent_profile, :scent_intensity, :additional_benefits, :packaging, :size, :price, :quantity, :total, :order_date)
//             ");
//             $stmt->execute([
//                 ':customer_name' => $customer_name,
//                 ':customer_email' => $customer_email,
//                 ':customer_phone' => $customer_phone,
//                 ':customer_address' => $customer_address,
//                 ':custom_name' => $custom_name,
//                 ':specific_fragrance' => $specific_fragrance,
//                 ':base_oil' => $base_oil,
//                 ':scent_profile' => $scent_profile,
//                 ':scent_intensity' => $scent_intensity,
//                 ':additional_benefits' => $additional_benefits,
//                 ':packaging' => $packaging,
//                 ':size' => $size,
//                 ':price' => $price,
//                 ':quantity' => $quantity,
//                 ':total' => $total,
//                 ':order_date' => $order_date,
//             ]);

//             echo json_encode(['status' => 'success', 'message' => 'Order submitted successfully!', 'order_id' => $pdo->lastInsertId()]);
//         } catch (PDOException $e) {
//             error_log($e->getMessage(), 3, '/path/to/logfile.log');
//             echo json_encode(['status' => 'error', 'message' => 'Failed to submit order.']);
//         }
//     } else {
//         echo json_encode(['status' => 'error', 'message' => 'Invalid order data received.']);
//     }
// } else {
//     echo json_encode(['status' => 'error', 'message' => 'Invalid request method. Use POST.']);
// }
// ?>
<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Database connection details
$host = 'localhost';
$dbName = 'ordermanagement';
$username = 'root';
$password = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<pre>';
    print_r($_POST); // Display all incoming POST data
    echo '</pre>';
}

// Connect to the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    exit;
}

if (isset($_POST['name']) && isset($_POST['email'])) { // Ensure required fields are set
    // Retrieve form data
    $baseOil = $_POST['baseOil'] ?? null;
    $scentProfile = $_POST['scentProfile'] ?? null;
    $specificFragrance = $_POST['specificFragrance'] ?? null;
    $intensity = $_POST['intensity'] ?? null;
    $benefits = $_POST['benefits'] ?? null;
    $packaging = $_POST['packaging'] ?? null;
    $size = $_POST['size'] ?? null;
    $customName = $_POST['customName'] ?? null;
    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $phone = $_POST['phone'] ?? null;
    $address = $_POST['address'] ?? null;
    $quantity = $_POST['quantity'] ?? 1;
    $total = $_POST['total2'] ?? 0.0;
    $payref = $_POST['payref'] ?? 0.0;

    // Using prepared statements for security
    $query = "INSERT INTO custom_orders (customer_name, customer_email, customer_phone, customer_address, custom_name, specific_fragrance, base_oil, scent_profile, scent_intensity, additional_benefits, packaging, size, price, quantity, total) 
              VALUES (:name, :email, :phone, :address, :customName, :specificFragrance, :baseOil, :scentProfile, :intensity, :benefits, :packaging, :size, :payref, :quantity, :total)";
    $stmt = $pdo->prepare($query);

    // Bind parameters
    $stmt->bindParam(':baseOil', $baseOil, PDO::PARAM_STR);
    $stmt->bindParam(':scentProfile', $scentProfile, PDO::PARAM_STR);
    $stmt->bindParam(':specificFragrance', $specificFragrance, PDO::PARAM_STR);
    $stmt->bindParam(':intensity', $intensity, PDO::PARAM_STR);
    $stmt->bindParam(':benefits', $benefits, PDO::PARAM_STR);
    $stmt->bindParam(':packaging', $packaging, PDO::PARAM_STR);
    $stmt->bindParam(':size', $size, PDO::PARAM_STR);
    $stmt->bindParam(':customName', $customName, PDO::PARAM_STR);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':phone', $phone, PDO::PARAM_STR);
    $stmt->bindParam(':address', $address, PDO::PARAM_STR);
    $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
    $stmt->bindParam(':total', $total, PDO::PARAM_STR);
    $stmt->bindParam(':payref', $payref, PDO::PARAM_STR);

    // Execute and handle response
    if ($stmt->execute()) {
        echo "Order submitted successfully!";
    } else {
        print_r($stmt->errorInfo()); // Display error details
    }
} else {
    echo "Required fields are missing!";
}
?>
