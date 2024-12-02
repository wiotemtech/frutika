<?php
// Database connection details
$host = 'localhost';
$dbName = 'ordermanagement';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Update query to fetch the last 5 orders
$query = "SELECT * FROM regular_orders ORDER BY created_at DESC LIMIT 5";
$stmt = $pdo->query($query);
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Update query to fetch the total orders
$query = "SELECT COUNT(*) as total_orders FROM regular_orders";
$stmt = $pdo->query($query);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$totalOrders = $result['total_orders'];
// Query to get the total number of unique customers
$query = "SELECT COUNT(DISTINCT email) AS total_customers FROM regular_orders";
$stmt = $pdo->query($query);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$totalCustomers = $result['total_customers']; // This will hold the total number of unique customers
// Query to get the total sales
$query = "SELECT SUM(total) AS total_sales FROM regular_orders";
$stmt = $pdo->query($query);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$totalSales = $result['total_sales']; // Total sales revenue
// Query to get the weekly sales
$query = "
    SELECT SUM(total) AS weekly_sales 
    FROM regular_orders 
    WHERE YEAR(created_at) = YEAR(CURDATE()) AND WEEK(created_at, 1) = WEEK(CURDATE(), 1)
";
$stmt = $pdo->query($query);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$weeklySales = $result['weekly_sales']; // Weekly sales revenue



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kqhah Body Oils and Butters Online ship, Created by R.Martinz Holdings">
    <title>Admin Dashboard - Custom Orders</title>



    <!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
        }
      
        
/* Add table formatting */
.table {
    table-layout: auto; /* Dynamic column width */
    width: 100%;
    border-collapse: collapse; /* Remove extra space between table cells */
}

.table th, .table td {
    padding: 12px 15px; /* Add spacing for readability */
    text-align: left; /* Align text to the left */
   
}

.table th {
    background-color: #f4f4f4; /* Light background for headers */
    font-weight: bold;
}

.table td {
    border: 1px solid #ddd; /* Add subtle border for clarity */
}

.table-responsive {
    overflow-x: auto; /* Enable horizontal scrolling for overflow */
}

/* Style for alternating row colors for better readability */
.table-striped tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
}

.table-striped tbody tr:nth-child(even) {
    background-color: #ffffff;
}

.alert {
    font-size: 16px;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-top: 10px;
}
        .table thead {
            position: sticky;
            top: 0;
            background-color: #f8f9fa;
            z-index: 10;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0,0,0,0.05);
        }
        .table-hover tbody tr:hover {
            background-color: rgba(0,123,255,0.1);
        }
        /* Sidebar styles */

/* Floating Sidebar Card */
.sidebar-card {
    width: 220px; /* Set the width of the card */
    background-color: #ffffff; /* White background for the card */
    border: 1px solid #ddd; /* Subtle border */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow for floating effect */
    padding: 20px; /* Padding inside the card */
    position: fixed; /* Fixed position for floating effect */
    top: 20px; /* Space from the top of the window */
    left: 20px; /* Space from the left of the window */
    z-index: 100; /* Ensure it stays on top of other elements */
}
.fixed-width-cell {
        width: 400px; /* Set the desired fixed width */
        word-wrap: break-word; /* Ensure text wraps within the cell */
        word-break: break-word; /* Additional support for breaking long words */
        white-space: normal; /* Allow text to wrap to the next line */
        vertical-align: top; /* Optional: Align text to the top */
    }

/* Styling for Sidebar Navigation */
.sidebar-nav {
    list-style: none; /* Remove default list styling */
    padding: 0; /* Remove default padding */
    margin: 0; /* Remove default margin */
}

.sidebar-nav li {
    margin-bottom: 15px; /* Add space between list items */
}

.sidebar-nav li:last-child {
    margin-bottom: 0; /* Remove bottom margin for the last item */
}

.sidebar-nav a {
    text-decoration: none; /* Remove underline from links */
    color: #333; /* Dark text color */
    font-weight: bold; /* Bold font for links */
    display: block; /* Make links fill the width of the list item */
    padding: 10px 15px; /* Add padding inside the links */
    border-radius: 4px; /* Rounded corners for hover effect */
    transition: background-color 0.3s ease; /* Smooth hover effect */
}

.sidebar-nav a:hover {
    background-color: #f5f5f5; /* Light gray background on hover */
    color: #007bff; /* Change text color on hover */
}

/* Ensure the main content doesn't overlap */
.main-content {
    margin-left: 20px; /* Add space to the left of the table to account for the sidebar width + spacing */
    padding: 40px; /* Optional: Add some padding to the main content */
}


    </style>
</head>
<body>

	
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
					<!-- logo -->
					<div class="site-logo">
						<a href="index.html">
							<img src="assets/img/logo.png" alt="">
						</a>
					</div>
					<!-- logo -->
						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li ><a href="index.html">Home</a>
								</li>
                                <!-- <li><a href="contact.html">Dashboard</a></li> -->
								<li><a href="customorders.php">Custom Orders</a>
								</li>
								<li class="current-list-item"><a href="regularorders.php">Regular Orders</a></li></li>
                                <!-- <li><a href="reports.php">Reports</a></li></li> -->
                                <!-- <li><a href="regularorders.php">Customers</a></li></li> -->
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Dashboard</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="container dashboard-container">
 


    <div class="main-content">
        

        <!-- Cards for Overview -->
        <div class="row">
                <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daily Orders</h5>
                        <p class="card-text"><img src="assets/img/orders.png" style="margin-right: 40px; width: 30px; height: 30px;"><?php echo htmlspecialchars($totalOrders); ?></p> <!-- Display the total number of orders -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Customers</h5>
                        <p class="card-text"><img src="assets/img/customers.png" style="margin-right: 40px; width: 30px; height: 30px;"><?php echo htmlspecialchars($totalCustomers); ?></p> <!-- Example: Dynamic value goes here -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Sales</h5>
                        <p class="card-text"><img src="assets/img/sales.png" style="margin-right: 40px; width: 30px; height: 30px;"><?php echo htmlspecialchars($totalSales); ?></p> <!-- Example: Dynamic value goes here -->
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Weekly Sales</h5>
                        <p class="card-text"><img src="assets/img/sales.png" style="margin-right: 40px; width: 30px; height: 30px;"><?php echo htmlspecialchars($weeklySales); ?></p> <!-- Example: Dynamic value goes here -->
                    </div>
                </div>
            </div>
        </div>

        <h2>Customer Information</h2>
        <div class="table-responsive" style="overflow-x: auto;">
            <?php if (!empty($orders)): ?>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($order['id']); ?></td>
                            <td><?php echo htmlspecialchars($order['name']); ?></td>
                            <td><?php echo htmlspecialchars($order['email']); ?></td>
                            <td><?php echo htmlspecialchars($order['phone']); ?></td>
                            <td><?php echo htmlspecialchars($order['address']); ?></td>
                            <td><?php echo htmlspecialchars($order['city']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="alert alert-info text-center">No customer information found.</div>
            <?php endif; ?>
        </div>

        <h2>Product Details</h2>
        <div class="table-responsive" style="overflow-x: auto;">
            <?php if (!empty($orders)): ?>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Order Details</th>
                            <th>Payment Reference</th>
                            <th>Order Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $order): ?>
                        <tr>
                        <td><?php echo htmlspecialchars($order['id']); ?></td>
                        <td  class="fixed-width-cell"><?php echo htmlspecialchars($order['cart_details']); ?></td>
                        <td><?php echo htmlspecialchars($order['payref']); ?></td>
                        <td><?php echo htmlspecialchars($order['created_at']); ?></td>
                        </tr>
                        
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="alert alert-info text-center">No product details found.</div>
            <?php endif; ?>
        </div>

    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>