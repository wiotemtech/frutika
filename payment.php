<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by R.Matinez Holdings">

	<!-- title -->
	<title>Check Out</title>
	<script src="https://www.paypal.com/sdk/js?client-id=AY05oQ3yo22At-dpHze7NZkj86FB-tYbPMoOWjxlppTzuZdDNXLYW-OcI361OgZi_w5BRVY5Q8_zp3vF&currency=USD"></script>

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

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
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
								<li class="current-list-item"><a href="index.html">Home</a>
									
								</li>
								
								<li><a href="shop.html">Shop</a>
								<li><a href="about.html">About Us</a></li>
								<li><a href="contact.html">Contact</a></li>
								</li>
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
						<h1>Check Out</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
							<!-- Billing Address -->
							<div class="card single-accordion">
								<div class="card-header" id="headingOne">
									<h5 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Billing Address
										</button>
									</h5>
								</div>
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
									<div class="card-body">
										<div class="billing-address-form">
											<!-- display iframe for the qrcode to scan -->
                                             <iframe src="https://cash.app/$Kqhahshop24" width="100%" height="600px"></iframe>

										</div>
									</div>
								</div>
							</div>
							<!-- Shipping Address -->
						</div>
					</div>
				</div>
				<style>
					
				</style>
				
				

				<div class="col-lg-4">
					<div class="order-details-wrap">
                        <form action="https://formsubmit.co/namronny12@gmail.com" method="post">
                           
                            <h5>Payment confirmation</h5>
                        
                                <input type="text" id="transaction_id" placeholder="Enter last 5 digits of transaction ID" name="transaction_id" class="form-control"> <br>
                                <input type="submit" class="boxed-btn" style="font-size:16px">
                            </td>                                        
                                    
                        </form>
					</div>
				</div>
				
				<script>
					document.addEventListener('DOMContentLoaded', function () {
						populateOrderDetails();
					});
					
					function populateOrderDetails() {
						// Retrieve the cart data from localStorage
						const cart = JSON.parse(localStorage.getItem('cart')) || [];
						const orderDetailsBody = document.querySelector('.order-details-body');
						const subtotalElement = document.getElementById('subtotal');
						const totalElement = document.getElementById('total');
						const shippingCost = 50; // Example shipping cost
					
						// Clear existing rows (except headers)
						orderDetailsBody.innerHTML = `
							<tr>
								<td>Product</td>
								<td>Total</td>
							</tr>`;
					
						let subtotal = 0;
					
						// Loop through each item in the cart and add a row to the table
						cart.forEach(item => {
							// Parse the price as a float
							const productPrice = parseFloat(item.price);
							const productTotal = productPrice * item.quantity;
					
							// Check if productPrice is a valid number
							if (!isNaN(productTotal)) {
								subtotal += productTotal;
					
								// Create a new row for the product
								const row = document.createElement('tr');
								row.innerHTML = `
									<td>${item.name} (x${item.quantity})</td>
									<td>$${productTotal.toFixed(2)}</td>
								`;
								orderDetailsBody.appendChild(row);
							}
						});
					
						// Update the subtotal, shipping, and total values
						subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
						const total = subtotal + shippingCost;
						totalElement.textContent = `$${total.toFixed(2)}`;
					}
					
					// Ensure the cart information is loaded correctly when the page loads
					</script>
					
				
			</div>
		</div>
	</div>
	<!-- end check out section -->

	
	
	

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>At KQHAH Therapy, we’re dedicated to providing products that nourish, heal, and enhance your natural beauty. Inspired by a commitment to wellness and self-care, our offerings are carefully crafted from all-natural ingredients.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>24,7 Online.</li>
							<li>Kqhahtherapy9@gmail.com</li>
							<li>+96596750535</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="shop.html">Shop</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2024 - <a href="index.html">KQHAHSHOP</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<!-- <div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
    // Get the checkbox element
    const checkbox = document.getElementById('same-address');

    // Listen for checkbox change event
    checkbox.addEventListener('change', function () {
        if (checkbox.checked) {
            // Copy billing details to shipping fields
            document.getElementById('shipping-name').value = document.getElementById('billing-name').value;
            document.getElementById('shipping-email').value = document.getElementById('billing-email').value;
            document.getElementById('shipping-address').value = document.getElementById('billing-address').value;
            document.getElementById('shipping-phone').value = document.getElementById('billing-phone').value;
            document.getElementById('shipping-comments').value = document.getElementById('billing-comments').value;
        } else {
            // Clear the shipping fields
            document.getElementById('shipping-name').value = '';
            document.getElementById('shipping-email').value = '';
            document.getElementById('shipping-address').value = '';
            document.getElementById('shipping-phone').value = '';
            document.getElementById('shipping-comments').value = '';
        }
    });
});



paypal.Buttons({
    createOrder: function(data, actions) {
        // Set up the transaction details here
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: document.getElementById('total').textContent.replace('$', '')
                }
            }]
        });
    },
    onApprove: function(data, actions) {
        // Capture the order after approval
        return actions.order.capture().then(function(details) {
            alert('Transaction completed by ' + details.payer.name.given_name);
            // Redirect or update the UI to confirm the order
        });
    }
}).render('#paypal-button-container');


	</script>

</body>
</html>