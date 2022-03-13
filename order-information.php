<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Zero30">
	<meta name="description" content="Order Information">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<!-- <link rel="stylesheet" href="https://unpkg.com/flickity-fullscreen@1/fullscreen.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">
	<link rel="stylesheet" href="assets/css/fullscreen.css">

	<title>Order Information</title>
</head>

<body id="order-information-page" class="container">
	<!-- Wrapping everything in a form so it can be submitted to the database. -->
	<form action="">
		<section id="header" class="constrain header-white">
			<a href="edit-profile" class="back link">
				<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
			</a>

			<div class="text">
				<h2 class="title">Order Information</h2>

				<p class="id">
					<span>ID:</span> 43e2 116H
				</p>
			</div>
		</section>

		<section id="delivery-address" class="constrain">
			<div class="header">
				<h5>Delivery to</h5>
				<a href="#" class="link link-primary">Add new address</a>
			</div>

			<div class="address">
				<!-- i think a map goes here. -->
				<div class="map">
					<img src="assets/images/others/address-map.png" height="100px" alt="Map">
				</div>

				<div class="details">
					<h5 class="location-address">
						<img class="svg" src="assets/images/icons/map-pointer.svg" height="9px" alt="Store">
						<span>76A Gwarimpa Estate, Abuja</span>
					</h5>
					<p class="name">
						<img class="svg" src="assets/images/icons/person.svg" height="9px" alt="Store">
						<span>Joy Obianaba</span>
					</p>
					<p class="phone">
						<img class="svg" src="assets/images/icons/telephone.svg" height="9px" alt="Store">
						<span>+234 (803) 878 2933</span>
					</p>
				</div>
			</div>
		</section>

		<section id="delivery-details">
			<div class="heading constrain">
				<div class="v-grid">
					<h5>Delivery Time</h5>
					<div class="h-grid">
						<p>10:11 AM</p>
						<p>Oct 6, 2020</p>
					</div>
				</div>
				<a href="#" class="link link-primary">Edit</a>
			</div>

			<div class="cart-item constrain">
				<div class="image">
					<img src="assets/images/restaurants/lion-square.png" height="100px" alt="Restaurant Image">
				</div>
				<div class="details">
					<h5 class="name">Lion Square</h5>
					<p class="product">Lemon Fresh Juice</p>
				</div>
			</div>

			<div class="cart-totals constrain">
				<div class="h-grid">
					<p>Subtotal (1 item)</p>
					<p>₦700.00</p>
				</div>
				<div class="h-grid">
					<p>Ship Fee (2.4 Km)</p>
					<p>₦850.00</p>
				</div>
				<div class="totals">
					<h4>Total</h4>
					<h4>₦1550.00</h4>
				</div>
			</div>
		</section>

		<section id="note">
			<div class="title constrain">
				<h5>Note</h5>
			</div>

			<div class="constrain">
				<textarea name="note" placeholder="Please call me when you come. Thank you!" id="note"></textarea>
			</div>
			
		</section>
		
		<div class="submit constrain">
			<a href="#" class="btn btn-outline-black">Rating</a>
			<button type="submit" class="btn btn-primary">Re-Order</button>
		</div>
	</form>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script> -->
	<!-- <script src="https://unpkg.com/flickity-fullscreen@1/fullscreen.js"></script> -->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/flickity.js"></script>
	<script src="assets/js/fullscreen.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/smooth-scroll.js"></script>
</body>

</html>