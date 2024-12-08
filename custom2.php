<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Kqhah Body Oils and Butters Online ship, Created by R.Martinz Holdings">

	<!-- title -->
	<title>Butters</title>

	
	<!-- <script src="https://www.paypal.com/sdk/js?client-id=AY05oQ3yo22At-dpHze7NZkj86FB-tYbPMoOWjxlppTzuZdDNXLYW-OcI361OgZi_w5BRVY5Q8_zp3vF&currency=USD"></script> -->

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

	<style>
		/* Base styles for buttons */
			.hero-btns1 a {
			font-family: 'Poppins', sans-serif;
			display: inline-block;
			padding: 10px 20px;
			text-decoration: none;
			text-align: center;
			border-radius: 40px; /* Add rounded corners */
			transition: all 0.3s ease; /* Smooth transition for hover effects */
			}

			/* Styling for the boxed button */
			.hero-btns1 a.border {
			background-color: #F28123;
			color: #fff;
			border: 2px solid transparent; /* No visible border */
			}

			/* Styling for the border button */
			.hero-btns1 a.boxed {
			background-color: transparent;
			color: #F28123;
			border: 2px solid #F28123; /* Orange border */
			}

			/* Active state for the border button */
			.hero-btns1 a.border.active {
			border: 2px solid #c56b18; /* Darker orange for active state */
			color: #c56b18; /* Darker orange text */
			font-weight: bold; /* Make the active button text bold */
			}

			/* Hover effects */
			.hero-btns1 a:hover {
			transform: scale(1.05); /* Slight zoom on hover */
			box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
			}

	</style>

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
								<li><a href="shop.html">Product</a>
								</li>
								<li><a href="about.html">About us</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
										<!-- <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a> -->
									</div>
								</li>
							</ul>
						</nav>
						<!-- <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a> -->
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
						<h1>Customize Your Scent</h1>
						<div class="hero-btns1">
							<a href="custom.php" class="boxed"> Perfumes</a>
							<a href="custom2.php" class="border" active>Butters</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
<!-- single product -->
<div class="container">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-5">
            <div class="single-product-img">
                <img id="product-image" src="assets/img/products/b2.jpg" alt="Customizable Body Oil/Perfume">
            </div>
        </div>

        <!-- Custom Butter Product Details -->
<div class="col-md-7">
    <div class="single-product-content">
        <h2 class="product-title">Create Your Custom Butters</h2>
        <p class="single-product-pricing"><span>Price:</span> $40</p>
        <p class="product-description">Craft your unique body butter by selecting your preferred base, scent, added benefits, and size. Tailor-made for your skin's needs and preferences.</p>
       
        <!-- Select Base Butter -->
		<form  id="form1" action="submit_order.php" method="POST">
			<div class="customization-group">
				<label class="customization-label"><i class="fas fa-flask"></i> Choose Your Butter Base: </label>
				<div class="row-options">
					<input type="radio" name="baseOil" value="Shea Butter" id="Shea Butter" class="btn-option">
					<label for="Shea Butter">Shea Butter</label>

					<input type="radio" name="baseOil" value="Mango Butter" id="Mango Butter" class="btn-option">
					<label for="Mango Butter">mango Butter</label>

				
				</div>
			</div>


			<!-- Scent Profile -->
			
			

			<!-- Specific Fragrance -->
			<div class="customization-group">
                        <label class="customization-label"><i class="fas fa-pen"></i> Add Specific Fragrance: </label>
                        <input type="text" id="specificFragrance" name="specificFragrance" class="customization-input" placeholder="Specific Fragrance...">
            </div>

			<!-- Scent Intensity -->
			<div class="customization-group">
				<label class="customization-label"><i class="fas fa-wind"></i> Scent Intensity: </label>
				<div class="row-options">
					<input type="radio" name="intensity" value="Subtle" id="subtle" class="btn-option">
					<label for="subtle">Subtle</label>

					<input type="radio" name="intensity" value="Moderate" id="moderate" class="btn-option">
					<label for="moderate">Moderate</label>

					<input type="radio" name="intensity" value="Strong" id="strong" class="btn-option">
					<label for="strong">Strong</label>
				</div>
			</div>

			<!-- Additional Benefits -->
			
			

			<!-- Packaging Preferences -->
			<div class="customization-group">
				<label class="customization-label"><i class="fas fa-box"></i> Packaging Preference: </label>
				<div class="row-options">
					<input type="radio" name="packaging" value="Plastic Jar" id="PlasticJar" class="btn-option">
					<label for="PlasticJar">Plastic Jar</label>
				</div>
			</div>
			<div class="single-product-form">
			<label for="PlasticJar">Quantity</label>
					<input type="number" name="quantity" placeholder="1" min="1" max="10" class="quantity-input">
				</div>
			
			<!-- Size Options -->
			<div class="customization-group">
				<label class="customization-label"><i class="fas fa-ruler"></i> Choose Size: </label>
				<div class="row-options">
					<input type="radio" name="size" value="3 Oz $40" id="size3Oz" class="btn-option">
					<label for="size3Oz">3 Oz $40</label>

					<input type="radio" name="size" value="6 Oz $50" id="size6Oz" class="btn-option">
					<label for="size6Oz">6 Oz $50</label>

					<input type="radio" name="size" value="8 Oz $60" id="size8Oz" class="btn-option">
					<label for="size8Oz">8 Oz $60</label>
				</div>
			</div>
						

			<!-- Add Custom Name/Message -->
			  <!-- Add Custom Name/Message -->
			  <div class="customization-group">
                        <label class="customization-label"> Add Custom Name: </label>
                        <input type="text" id="customName" name="customName" class="customization-input" placeholder="Your custom Name...">
            	</div>

						<div class="customization-group">
							<label class="customization-label">Name: </label>
							<input type="text" required id="name" name="name" class="customization-input" placeholder="Name...">
						</div>
						<div class="customization-group">
							<label class="customization-label">Email: </label>
							<input type="email" required id="email" name="email" class="customization-input" placeholder="Email...">
						</div>
						<div class="customization-group">
							<label class="customization-label">Phone: </label>
							<input type="text" required id="phone" name="phone" class="customization-input" placeholder="Phone...">
						</div>

						<div class="customization-group">
							<label class="customization-label">Address: </label>
							<input type="text" required id="address" name="address" class="customization-input" placeholder="1234/Elm Street">
						</div>
						<div class="customization-group">
                        <label class="customization-label">City </label>
                        <input type="text"  id="city" name="city" class="customization-input" placeholder="City...">
                    </div>
                    <div class="customization-group">
                        <label class="customization-label">ZIP Code: </label>
                        <input type="text" required id="zipcode" name="zipcode" class="customization-input" placeholder="ZIP Code">
                    </div>

			   <!-- Quantity and Add to Cart -->
			  
                    <input type="hidden" id="total2" name="total2" value="">
                       <!-- cashapp app -->
                <div class="single-product-form">
                <a href="#" id="pay-link" style="background-color: #00d632; color: white;  padding: 10px 10px; border: none; border-radius: 50px; font-size: 16px;" target="_blank">
					
						Pay with Cash App
					
				</a>
               
                </div>


                <div class="customization-group">
                        <label class="customization-label">Payment reference: </label>
                        <input type="text" required id="payfer" name="payref" class="customization-input" placeholder="Enter the lasr five digits of your reciept">
                    </div>


                <button name ="submit_order" type="submit" id="submitOrder" class="btn-submit d-flex align-items-center justify-content-center" style="cursor: pointer; margin-top:20px; background: #f28123; color: white; padding: 20px; width: 200px; height: 30px; text-align: center; border: none; border-radius: 50px; display: flex; ">Place Order</button>

               
                </form>
                <form id="form2" action="https://formsubmit.co/kqhahtherapy9@gmail.com" method="POST" style="display:none;">
                <input type="hidden" name="confirmation" value="new butter order sent!">
                </form>
					
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
		  <!-- Totals Table -->
		    <table id="totalsTable">
                                            <tr>
                                                <td>Subtotal:</td>
                                                <td id="subtotal">$0</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping:</td>
                                                <td id="shipping">$10</td>
                                            </tr>
                                            <tr>
                                                <td>Tax (10%):</td>
                                                <td id="tax">$0</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Total:</strong></td>
                                                <td id="total">$0</td>
                                            </tr>
        	</table>
                                        <style>
                                          #totalsTable {
                                                display: table;
                                                width: 100%;
                                                border-collapse: separate;
                                                border-spacing: 10px;
                                            }

                                            #totalsTable tr {
                                                display: inline-block;
                                                margin-right: 20px;
                                            }

                                            #totalsTable td {
                                                display: inline-block;
                                                margin-right: 5px;
                                            }

                                            #totalsTable td:first-child {
                                                font-weight: bold;
                                            }
                                        </style>

                    <!-- <div id="paypal-button-container"></div> -->
					<!-- <div id="payment-form"></div>
					<button id="pay-button">Pay</button> -->
					


        <!-- Product Meta Info -->
        <p><strong>Categories: </strong>Beauty, Custom Butters</p>

        <!-- Social Sharing Options -->
        <h4>Share:</h4>
        <ul class="product-share">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </div>
</div>
	
<style>
		/* General styles for customization groups */
		.customization-group {
		margin: 20px 0;
		padding: 15px;
		background-color: #f9f9f9;
		border-radius: 10px;
		box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
		}

		.customization-label {
		font-size: 1.2em;
		font-weight: 600;
		color: #333;
		margin-bottom: 10px;
		display: flex;
		align-items: center;
		}

		.customization-label i {
		margin-right: 10px;
		}

		.row-options {
		display: flex;
		flex-wrap: wrap;
		gap: 15px;
		}

		.btn-option {
		display: none;
		}

		/* Style for the radio buttons and labels */
		input[type="radio"] {
		display: none;
		}

		input[type="radio"]:checked + label {
		background-color: #4CAF50;
		color: white;
		border-color: #4CAF50;
		}

		input[type="radio"] + label {
		display: inline-block;
		padding: 10px 20px;
		background-color: #e0e0e0;
		border-radius: 20px;
		border: 2px solid transparent;
		font-size: 1em;
		font-weight: 500;
		cursor: pointer;
		transition: background-color 0.3s, color 0.3s, transform 0.2s;
		}

		/* Hover and focus effects for labels */
		input[type="radio"]:not(:checked) + label:hover {
		background-color: #b3b3b3;
		color: #333;
		transform: translateY(-3px);
		}

		input[type="radio"]:focus + label {
		box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.4);
		}

		/* Specific styles for input text fields */
		.customization-input {
		width: 100%;
		padding: 12px;
		margin-top: 8px;
		font-size: 1em;
		border: 2px solid #ddd;
		border-radius: 8px;
		box-sizing: border-box;
		transition: border 0.3s ease;
		}

		.customization-input:focus {
		border-color: #4CAF50;
		outline: none;
		}

		/* Style for radio buttons and labels on smaller screens */
		@media (max-width: 768px) {
		.row-options {
			flex-direction: column;
		}

		.customization-label {
			font-size: 1.1em;
		}
		}
    /* General Styling */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .col-md-5, .col-md-7 {
        flex: 1;
    }

    /* Product Image Styling */
    .single-product-img img {
        width: 100%;
        height: auto;
        border-radius: 15px;
        transition: transform 0.3s ease;
    }
    .single-product-img:hover img {
        transform: scale(1.05);
    }

    /* Product Details */
    .product-title {
        font-size: 2.5em;
        color: #333;
        margin-bottom: 15px;
    }
    .single-product-pricing {
        font-size: 1.8em;
        color: #ff5733;
        margin-bottom: 20px;
    }
    .product-description {
        font-size: 1.2em;
        margin-bottom: 30px;
        color: #555;
    }

    /* Customization Group Styling */
    .customization-group {
        margin-bottom: 25px;
    }
    .customization-label {
        font-weight: 600;
        font-size: 1.2em;
        margin-bottom: 10px;
        display: inline-block;
        color: #555;
    }
    .row-options {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    /* Adjusted White Buttons with Blank Borders */
    .btn-option {
        padding: 8px 18px;
        background-color: white;
        color: #333;
        border: 2px solid #ddd;
        border-radius: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 0.9em;
    }

    /* Adjusted Color Options */
    .color-option {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        cursor: pointer;
        border: 2px solid transparent;
        transition: all 0.3s ease;
    }

    .color-option:hover {
        border-color: #3498db;
    }
    .color-option.selected {
        border-color: #27ae60;
    }

    /* Quantity and Add to Cart */
    .quantity-input {
        width: 60px;
        padding: 8px;
        margin-right: 15px;
        border: 2px solid #ddd;
        border-radius: 30px;
        text-align: center;
    }
    .cart-btn {
        padding: 12px 40px;
        background-color: #ff5733;
        color: white;
        border: none;
        border-radius: 30px;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-block;
    }
    .cart-btn:hover {
        background-color: #c0392b;
    }

    /* Social Media Share */
    .product-share {
        list-style: none;
        padding: 0;
        display: flex;
        gap: 10px;
    }
    .product-share li a {
        font-size: 1.5em;
        color: #555;
        transition: color 0.3s ease;
    }
    .product-share li a:hover {
        color: #3498db;
    }
</style>

	<!-- more products -->
	</div>
</div>
	

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
							<li>24/7 Online Support.</li>
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
					<p>Copyrights &copy; 2024 - <a href="https://imransdesign.com/">KQHAHSHOP</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
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
	function calculateTotal() {
    const taxRate = 0.10; // 10% tax rate
    const shippingCost = 12; // Fixed shipping cost

    // Find the selected size radio button
    const selectedSizeElement = document.querySelector('input[name="size"]:checked');

    if (!selectedSizeElement) {
        console.log("No size selected");
        return; // Exit if no size is selected
    }

    // Extract price from the value attribute of the selected radio button
    const selectedSizeValue = selectedSizeElement.value; // Example: "3 Oz $40"
    const selectedSizePrice = parseFloat(selectedSizeValue.match(/\$(\d+)/)[1]); // Extract the number after the dollar sign

    // Get quantity (default to 1 if not specified)
    const quantityInput = document.querySelector('.quantity-input');
    const quantity = parseInt(quantityInput.value) || 1;

    // Calculate totals
    const subtotal = selectedSizePrice * quantity;
    const tax = subtotal * taxRate;
    const total = subtotal + tax + shippingCost;

    // Update table elements
    document.getElementById('subtotal').textContent = `$${subtotal.toFixed(2)}`;
    document.getElementById('shipping').textContent = `$${shippingCost.toFixed(2)}`;
    document.getElementById('tax').textContent = `$${tax.toFixed(2)}`;
    document.getElementById('total').textContent = `$${total.toFixed(2)}`;
	document.getElementById('total2').value = total.toFixed(2);

	
}

// Add event listeners to radio buttons
document.querySelectorAll('input[name="size"]').forEach(radio => {
    radio.addEventListener('change', calculateTotal);
});

// Add event listener to the quantity input
document.querySelector('.quantity-input').addEventListener('input', calculateTotal);

// Initialize totals on page load
document.addEventListener('DOMContentLoaded', calculateTotal);



// // Add event listeners to radio buttons and quantity input
// document.getElementById('size2Oz').addEventListener('change', calculateTotal);
//     document.getElementById('size4Oz').addEventListener('change', calculateTotal);
//     document.getElementById('size6Oz').addEventListener('change', calculateTotal);
    
//     document.querySelector('.quantity-input').addEventListener('input', calculateTotal);

</script>
<!-- <script>
// Function to get the total from the table
function getTotalAmount() {
    // Get the total value from the table
    const totalElement = document.getElementById('total');
    const totalText = totalElement.textContent || totalElement.innerText;
    
    // Remove the dollar sign and convert to number
    const totalAmount = parseFloat(totalText.replace('$', '').trim());
    
    return totalAmount;
}

// PayPal button setup
paypal.Buttons({
    createOrder: function(data, actions) {
        const totalAmount = getTotalAmount(); // Get the total dynamically
        
        if (totalAmount <= 0) {
            alert("Please update the total before proceeding.");
            return; // Prevent order creation if total is not valid
        }

        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: totalAmount.toFixed(2) // Use the total amount from the table
                }
            }]
        });
    },
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
            alert('Payment Successful!');
        });
    }
}).render('#paypal-button-container'); // This renders the PayPal button inside the container
</script> -->


<script>
  document.addEventListener("DOMContentLoaded", async () => {
    // Initialize Square Payments API
    const payments = Square.payments(
      "sandbox-sq0idb-aJFDlfafbvJ-CHYnPel2EQ", // Replace with your Square Application ID
      "sandbox" // Use 'production' for live transactions, or 'sandbox' for testing
    );

    try {
      // Create the payment form
      const paymentForm = await payments.card({
       
      });

      // Attach the payment form to the element with ID 'payment-form'
      await paymentForm.attach("#payment-form");

      // Ensure the payment form is successfully attached before enabling the pay button
      document.getElementById("pay-button").disabled = false; // Enable the Pay button

      // Add event listener to the Pay button
      document.getElementById("pay-button").addEventListener("click", async () => {
		const totalAmount = parseFloat(document.getElementById("total").innerText) * 100;  // Retrieve the total amount (in cents)

        try {
          // Tokenize the payment form to generate a payment token
          const result = await paymentForm.tokenize();

          if (result.status === "OK") {
			console.log("Tokenization successful:", result.token);
            // Send payment token and amount to your backend for processing
            const response = await fetch("process-payment.php", {
              method: "POST",
              headers: { "Content-Type": "application/json" },
              body: JSON.stringify({ token: result.token, amount: totalAmount}),
            });

            const data = await response.json();
            if (data.success) {
            alert("Payment successful!");
            showSubmitOrderButton(); // Assuming this is defined elsewhere
          } else {
            alert("Payment failed: " + data.error);
          }
        } else {
          console.error("Tokenization failed:", result.errors);
        }
      } catch (error) {
        console.error("Error processing payment:", error);
      }
      });
    } catch (error) {
      console.error("Error initializing the payment form:", error);
    }
  });


  // Function to display the Submit Order button
function showSubmitOrderButton() {
    const submitOrderButton = document.getElementById("submitOrder");
    submitOrderButton.style.display = "block"; // Make the button visible
}

// Get the current page's URL path (e.g., "custom.html" or "custom2.html")
const currentPage = window.location.pathname.split("/").pop();

// Select all buttons
const menuButtons = document.querySelectorAll('.hero-btns a');

// Loop through the buttons to find the one matching the current page
menuButtons.forEach((button) => {
  if (button.getAttribute('href') === currentPage) {
    button.classList.add('active'); // Add the 'active' class to highlight
  }
});

</script>

<script>
  document.getElementById('form1').addEventListener('submit', async function (e) {
    e.preventDefault(); // Prevent default form submission
    
    const formData = new FormData(this); // Collect Form 1 data

    // Send Form 1 data to submit_order.php using Fetch API
    const response = await fetch(this.action, {
      method: this.method,
      body: formData,
    });

    if (response.ok) {
      // If Form 1 submission is successful, populate Form 2 with data
      
      
      // Submit Form 2 programmatically
      document.getElementById('form2').submit();
    } else {
      alert("Error submitting the order. Please try again.");
    }
  });
</script>





</body>


</html>