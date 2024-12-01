<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Kqhah Body Oils and Butters Online ship, Created by R.Martinz Holdings">

	<!-- title -->
	<title>Cart</title>
	

	
	
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
								<li ><a href="index.html">Home</a>
								</li>
								<li><a href="shop.html">Product</a>
								</li>
								<li><a href="about.html">About us</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart"  href="cart.php"><i class="fas fa-shopping-cart"></i></a>
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
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"></td>
									<td class="product-name"></td>
									<td class="product-price"></td>
									<td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td id="subtotal" class="align-right">$0</td>
								</tr>
								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td id="shipping" class="align-right">$10</td>
								</tr>
								<tr class="total-data">
									<td><strong>Tax: </strong></td>
									<td class="align-right">9%</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td id="total" class="align-right">$0</td>
								</tr>
							</tbody>
						
						
							<style>
								.total-table {
									width: 100%; /* Full-width table */
									border-collapse: collapse; /* Merge borders for a cleaner look */
									margin-top: 20px;
									font-family: Arial, sans-serif;
								}

								.total-table-head th {
									background-color: #f4f4f4; /* Light gray background for the table header */
									padding: 15px;
									text-align: left; /* Left-align headers for readability */
									border-bottom: 2px solid #ccc; /* Adds a bottom border for header */
									font-size: 16px;
								}

								.total-data {
									padding: 15px 0;
									border-top: 1px solid #ccc; /* Add a top border between rows */
									font-size: 16px;
								}

								.total-data td {
									padding: 10px; /* Padding for individual table cells */
									font-size: 16px;
									text-align: left; /* Aligns the text on the left side */
								}

								.align-right {
									text-align: right; /* Aligns numeric values to the right */
								}

								.total-table tbody td {
									border-bottom: 1px solid #ddd; /* Subtle border for separation */
								}

								.total-table th, .total-table td {
									width: 50%; /* Ensures even column width */
									padding: 10px; /* Adds padding inside each cell */
								}

								.total-table th {
									font-weight: bold;
								}


							</style>
							
						</table>

						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
							<!-- shipping Address -->
							<div class="card single-accordion">
								<div class="card-header" id="headingOne">
									<h5 class="mb-0">
										<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											shipping Address
										</button>
									</h5>
								</div>
								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
									<div class="card-body">
										<div class="billing-address-form">
											<form type="POST" id="fruitkha-contact" onsubmit="sendEmail(event);">
												<p><input type="text" id="billing-name" placeholder="Name" name="name" required></p>
												<p><input type="email" id="billing-email" placeholder="Email" name="email" required></p>
												<p><input type="text" id="billing-address" placeholder="Address" name="address" required></p>
												<p><input type="text" id="billing-city" placeholder="City" name="city" required></p>
												<p><input type="text" id="billing-street" placeholder="Street" name="street" required></p>
												<p><input type="tel" id="billing-phone" placeholder="Phone" name="name" required></p>
												<p><textarea id="billing-comments" cols="30" rows="3" placeholder="Additional Information" name="inform" required></textarea></p>
												<!-- cashapp Pay -->
												<!-- <a href="#" id="pay-link" target="_blank">
													<button style="background-color: #00d632; color: white; margin-bottom: 15px;  padding: 10px 10px; border: none; border-radius: 50px; font-size: 16px;">
														Pay with Cash App
													</button>
												</a> -->

												<p><input type="hidden" id="payref"  placeholder="Enter the last 4 digits of you Order id" name="payref" ></p>
											
												<button name ="submit_order" type="submit" id="submit-btn" class="btn-submit d-flex align-items-center justify-content-center" style="cursor: pointer; margin-top:20px; background: #f28123; color: white; padding: 20px; width: 200px; height: 30px; text-align: center; border: none; border-radius: 50px; display: flex; ">Place Order</button>
											
											
											</form>
											<!-- Email notification -->
											<form id="form2"
												 action="payment.php" 
												 method="POST" style="display:none;">
												<input type="hidden" name="confirmation" value="New order sent!">
												</form>
										</div>
										<div id="form_status"></div>

										<!-- <p><button type="submit" id="submit-btn">Submit</button></p> -->

										<script>
											document.getElementById("pay-link").addEventListener("click", function() {
												// Get the total value from the table
												var totalAmountText = document.getElementById("total").innerText;
												
												// Remove the dollar sign and parse the number
												var totalAmount = totalAmountText.replace('$', '').trim();
												
												// Construct the Cash App URL with the dynamic amount
												var url = "https://cash.app/$Kqhahshop24?amount=" + totalAmount;
												
												// Open the Cash App link
												window.open(url, "_blank");
											});
										</script>
										
										<script>
											// Add a click event listener to the button
											document.getElementById('submit-btn').addEventListener('click', function(event) {
												// Prevent the default form submission behavior
												event.preventDefault();
												
												// Call your function (e.g., sendOrderToDatabase)
												sendOrderToDatabase(event);

												// Log to the console for debugging
												console.log("Submit button clicked.");
											});
										</script>
										<script>
										function sendOrderToDatabase(event) {
    event.preventDefault(); // Prevent default form submission

    // Collect form values
    const name = document.getElementById('billing-name')?.value.trim();
    const email = document.getElementById('billing-email')?.value.trim();
    const address = document.getElementById('billing-address')?.value.trim();
    const city = document.getElementById('billing-city')?.value.trim();
    const street = document.getElementById('billing-street')?.value.trim();
    const phone = document.getElementById('billing-phone')?.value.trim();
    const message = document.getElementById('billing-comments')?.value.trim();
    const payref = document.getElementById('payref')?.value.trim();

    // Validate required fields
    if (!name || !email || !address || !city || !street || !phone) {
        alert('Please fill out all required fields.');
        return;
    }

    // Collect cart details
    let cartDetails = '';
    const cartTable = document.querySelectorAll('.cart-table tbody .table-body-row');
    cartTable.forEach(row => {
        const productName = row.querySelector('.product-name')?.innerText || 'N/A';
        const productPrice = row.querySelector('.product-price')?.innerText || 'N/A';
        const productQuantity = row.querySelector('.product-quantity input')?.value || '0';
        const productTotal = row.querySelector('.product-total')?.innerText || 'N/A';

        cartDetails += `Product: ${productName}\nPrice: ${productPrice}\nQuantity: ${productQuantity}\nTotal: ${productTotal}\n\n`;
    });

    // Collect totals
    const subtotal = document.getElementById('subtotal')?.innerText || '0';
    const shipping = document.getElementById('shipping')?.innerText || '0';
    const tax = '9%'; // Fixed tax
    const total = document.getElementById('total')?.innerText || '0';

    // Log data for debugging
    console.log("Collected Data:");
    console.log({ name, email, phone, address, city, street, message, payref, cartDetails, subtotal, shipping, tax, total });

    // Prepare XMLHttpRequest
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'process_order.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // XMLHttpRequest response handling
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) { // Request complete
            const formStatusElement = document.getElementById('form_status');
            if (formStatusElement) {
                if (xhr.status === 200) {
                    formStatusElement.innerHTML = xhr.responseText;

                    // Submit hidden form for email confirmation
                    const hiddenForm = document.getElementById('form2');
                    if (hiddenForm) {
                        hiddenForm.submit();
                    } else {
                        console.error("Hidden form with ID 'form2' not found.");
                    }
                } else {
                    formStatusElement.innerHTML = "Error submitting order.";
                    console.error("Server Error:", xhr.status, xhr.statusText);
                }
            } else {
                console.error("Element with ID 'form_status' not found.");
            }
        }
    };

    // Encode and send data
    const params = `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&phone=${encodeURIComponent(phone)}&address=${encodeURIComponent(address)}&city=${encodeURIComponent(city)}&street=${encodeURIComponent(street)}&cart_details=${encodeURIComponent(cartDetails)}&subtotal=${encodeURIComponent(subtotal)}&shipping=${encodeURIComponent(shipping)}&tax=${encodeURIComponent(tax)}&total=${encodeURIComponent(total)}&message=${encodeURIComponent(message)}&payref=${encodeURIComponent(payref)}`;

    console.log("Encoded Parameters:", params); // Log encoded parameters for debugging
    xhr.send(params);
    console.log("Request sent to the server.");
}


										</script>
											
					
									</div>
								</div>
							</div>
							
							</div>
							<!-- Shipping Address -->
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

	
	<!-- end logo carousel -->

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
							<li>24/7 Online</li>
							<li>Kqhahtherapy9@gmail.com/li>
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
						<form action="https://formsubmit.co/Kqhahtherapy9@gmail.com" method="POST">
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
		displayCartItems();
	});
	
	function displayCartItems() {
		const cart = JSON.parse(localStorage.getItem('cart')) || [];
		const cartTableBody = document.querySelector('.cart-table tbody');
		const subtotalElement = document.getElementById('subtotal');
		const shippingElement = document.getElementById('shipping');
		const totalElement = document.getElementById('total');
	
		cartTableBody.innerHTML = ''; // Clear existing rows
		let subtotal = 0;
	
		// Create table rows for each product in the cart
		cart.forEach((product, index) => {
			const { name, price, img, quantity } = product;
	
			// Clean the price string and extract only the numeric part
			const productPrice = parseFloat(price.replace(/[^0-9.]/g, ''));
			const productTotal = productPrice * quantity;
			subtotal += productTotal;
	
			const row = document.createElement('tr');
			row.classList.add('table-body-row');
			row.innerHTML = `
				<td class="product-remove"><a href="#" data-index="${index}"><i class="far fa-window-close"></i></a></td>
				<td class="product-image"><img src="${img}" alt=""></td>
				<td class="product-name">${name}</td>
				<td class="product-price">$${productPrice.toFixed(2)}</td>
				<td class="product-quantity">
					<input type="number" value="${quantity}" min="1" data-index="${index}">
				</td>
				<td class="product-total">$${productTotal.toFixed(2)}</td>
			`;
			cartTableBody.appendChild(row);
		});
	
		// Update totals
		const shipping = 10; // Example shipping cost
		shippingElement.innerText = `$${shipping.toFixed(2)}`;
		const total = subtotal + shipping + subtotal * 0.09;
	
		subtotalElement.innerText = `$${subtotal.toFixed(2)}`;
		totalElement.innerText = `$${total.toFixed(2)}`;
	
		// Add event listener for quantity input change
		document.querySelectorAll('.product-quantity input').forEach(input => {
			input.addEventListener('change', updateQuantity);
		});
	
		// Add event listener for remove buttons
		document.querySelectorAll('.product-remove a').forEach(button => {
			button.addEventListener('click', removeProduct);
		});
	}
	
	function updateQuantity(event) {
		const input = event.target;
		const index = input.getAttribute('data-index');
		const newQuantity = parseInt(input.value);
	
		if (newQuantity > 0) {
			let cart = JSON.parse(localStorage.getItem('cart')) || [];
			cart[index].quantity = newQuantity;
			localStorage.setItem('cart', JSON.stringify(cart));
			displayCartItems(); // Recalculate and update the cart
		}
	}
	
	function removeProduct(event) {
		event.preventDefault(); // Prevent the default action
	
		const index = event.target.closest('a').getAttribute('data-index');
		let cart = JSON.parse(localStorage.getItem('cart')) || [];
	
		// Remove the product from the cart
		cart.splice(index, 1);
	
		// Update localStorage
		localStorage.setItem('cart', JSON.stringify(cart));
	
		// Recalculate and update the cart display
		displayCartItems();
	}
</script>
<script>
	// Function to calculate and display totals
	function populateOrderDetails() {
		// Example subtotal calculation; update this based on your logic
		const productRows = document.querySelectorAll('.table-body-row');
		let subtotal = 0;
		productRows.forEach(row => {
			const price = parseFloat(row.querySelector('.product-price').textContent.replace('$', ''));
			const quantity = parseInt(row.querySelector('.product-quantity input').value) || 0;
			subtotal += price * quantity;
		});
	
		// Set the subtotal
		document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
	
		// Shipping and Tax values
		const shipping = parseFloat(document.getElementById('shipping').textContent.replace('$', ''));
		const taxRate = 0.09; // 9%
		const tax = subtotal * taxRate;
	
		// Total calculation
		const total = subtotal + shipping + tax;
		document.getElementById('total').textContent = `$${total.toFixed(2)}`;
	}
	
	// Call populateOrderDetails on page load
	window.onload = populateOrderDetails;
	
	// // PayPal button setup
	// function setupPayPalButton() {
	// 	paypal.Buttons({
	// 		createOrder: function(data, actions) {
	// 			const totalAmount = parseFloat(document.getElementById('total').textContent.replace('$', ''));
	
	// 			return actions.order.create({
	// 				purchase_units: [{
	// 					amount: {
	// 						value: totalAmount.toFixed(2) // The total amount for the transaction
	// 					}
	// 				}]
	// 			});
	// 		},
	// 		onApprove: function(data, actions) {
	// 			return actions.order.capture().then(function(details) {
	// 				alert('Transaction completed by ' + details.payer.name.given_name);
	// 				document.getElementById('submit-btn').style.display = 'block';
	// 				// You can redirect the user or update the UI as needed
	// 			});
	// 		},
	// 		onError: function(err) {
	// 			console.error(err);
	// 		}
	// 	}).render('#paypal-button-container'); // Render the PayPal button into the container
	// }
	
	// // Setup the PayPal button after the page loads
	// window.onload = function() {
	// 	populateOrderDetails();
	// 	setupPayPalButton();
	// };
    

	</script>
	
	
</body>
</html>