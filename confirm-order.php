<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Zero30">
	<meta name="description" content="Confirm Order">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<!-- <link rel="stylesheet" href="https://unpkg.com/flickity-fullscreen@1/fullscreen.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">
	<link rel="stylesheet" href="assets/css/fullscreen.css">

	<title>Confirm Order</title>
</head>

<body id="confirm-order-page" class="container">
	<!-- Wrapping everything in a form so it can be submitted to the database. -->
	<form action="order-information">
		<section id="header" class="constrain header-white">
			<a href="edit-profile" class="back link">
				<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
			</a>

			<div class="text">
				<h2 class="title">Confirm Order</h2>

				<p class="id">
					<span>ID:</span> 43e2 116H
				</p>
			</div>
		</section>

		<!-- Delivery address -->
		<section id="delivery-address" class="constrain">
			<div class="header">
				<h5>Delivery to</h5>
				<a href="#" class="link link-primary">Add new address</a>
			</div>

			<div class="address">
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

		<!-- Details of the delivery. -->
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

		<!-- Flickity Slider of Similar products -->
		<section id="similar-products">
			<div class="section-title constrain">
				<h4>Similar Products</h4>
			</div>

			<div class="products constrain"
				data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": false, "autoPlay": "10000", "pauseAutoPlayOnHover": true, "dragThreshold": "0", "LazyLoad": false }'>
				<div class="product bookmarked">
					<div class="details">
						<a href="#" class="image">
							<img src="assets/images/products/1.png" height="120px" alt="Fried Noodles Salad and Chicken Wings">
							<button type="button" class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>
						</a>
						<div class="text">
							<a href="#" class="name">Fried Noodles Salad and Chicken Wings</a>
							<p>
								<span class="price">₦1,500</span>
								<button type="button" class="btn add-to-cart">
									<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
								</button>
							</p>
						</div>
					</div>
				</div>

				<div class="product">
					<div class="details">
						<a href="#" class="image">
							<img src="assets/images/products/2.png" height="120px" alt="Fried Noodles Salad and Chicken Wings">
							<button type="button" class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>
						</a>
						<div class="text">
							<a href="#" class="name">Fried Noodles Salad and Chicken Wings</a>
							<p>
								<span class="price">₦1,500</span>
								<button type="button" class="btn add-to-cart">
									<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
								</button>
							</p>
						</div>
					</div>
				</div>

				<div class="product bookmarked">
					<div class="details">
						<a href="#" class="image">
							<img src="assets/images/products/3.png" height="120px" alt="Fried Noodles Salad and Chicken Wings">
							<button type="button" class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>
						</a>
						<div class="text">
							<a href="#" class="name">Fried Noodles Salad and Chicken Wings</a>
							<p>
								<span class="price">₦1,500</span>
								<button type="button" class="btn add-to-cart">
									<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
								</button>
							</p>
						</div>
					</div>
				</div>

				<div class="product bookmarked">
					<div class="details">
						<a href="#" class="image">
							<img src="assets/images/products/4.png" height="120px" alt="Fried Noodles Salad and Chicken Wings">
							<button type="button" class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>
						</a>
						<div class="text">
							<a href="#" class="name">Fried Noodles Salad and Chicken Wings</a>
							<p>
								<span class="price">₦1,500</span>
								<button type="button" class="btn add-to-cart">
									<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
								</button>
							</p>
						</div>
					</div>
				</div>

				<div class="product">
					<div class="details">
						<a href="#" class="image">
							<img src="assets/images/products/5.png" height="120px" alt="Fried Noodles Salad and Chicken Wings">
							<button type="button" class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>
						</a>
						<div class="text">
							<a href="#" class="name">Fried Noodles Salad and Chicken Wings</a>
							<p>
								<span class="price">₦1,500</span>
								<button type="button" class="btn add-to-cart">
									<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
								</button>
							</p>
						</div>
					</div>
				</div>

				<div class="product">
					<div class="details">
						<a href="#" class="image">
							<img src="assets/images/products/6.png" height="120px" alt="Fried Noodles Salad and Chicken Wings">
							<button type="button" class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>
						</a>
						<div class="text">
							<a href="#" class="name">Fried Noodles Salad and Chicken Wings</a>
							<p>
								<span class="price">₦1,500</span>
								<button type="button" class="btn add-to-cart">
									<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
								</button>
							</p>
						</div>
					</div>
				</div>

				<div class="product bookmarked">
					<div class="details">
						<a href="#" class="image">
							<img src="assets/images/products/1.png" height="120px" alt="Fried Noodles Salad and Chicken Wings">
							<button type="button" class="btn bookmark">
								<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
							</button>
						</a>
						<div class="text">
							<a href="#" class="name">Fried Noodles Salad and Chicken Wings</a>
							<p>
								<span class="price">₦1,500</span>
								<button type="button" class="btn add-to-cart">
									<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
								</button>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Select Voucher -->
		<section id="add-voucher">
			<div class="section-title constrain">
				<h4>Add Voucher</h4>
			</div>

			<div class="vouchers constrain">
				<div class="voucher">
					<a href="#">
						<div class="image">
							<img src="assets/images/vouchers/v1.svg" height="70px" alt="Voucher">
						</div>
					</a>
				</div>

				<div class="voucher">
					<a href="#">
						<div class="image">
							<img src="assets/images/vouchers/v2.svg" height="70px" alt="Voucher">
						</div>
					</a>
				</div>

				<div class="voucher">
					<a href="#">
						<div class="image">
							<img src="assets/images/vouchers/v1.svg" height="70px" alt="Voucher">
						</div>
					</a>
				</div>

				<div class="voucher">
					<a href="#">
						<div class="image">
							<img src="assets/images/vouchers/v2.svg" height="70px" alt="Voucher">
						</div>
					</a>
				</div>

				<div class="voucher">
					<a href="#">
						<div class="image">
							<img src="assets/images/vouchers/add-voucher.svg" height="70px" alt="Add Voucher">
						</div>
					</a>
				</div>
			</div>
		</section>

		<!-- Leaving a Note -->
		<section id="note">
			<div class="title constrain">
				<h5>Note</h5>
			</div>

			<div class="constrain">
				<textarea name="note" placeholder="Leave a note" id="note"></textarea>
			</div>
		</section>

		<section id="payment-method" class="constrain">
			<div class="header">
				<h5>Payment Method</h5>
				<a href="payment-methods" class="link link-primary">Add payment method</a>
			</div>

			<div class="cards">
				<div class="card">
					<input name="card" id="card-1" type="radio" checked>
					<label for="card-1">
						<div class="card-image visa">
							<img class="svg" width="40px" alt="Card Image">
						</div>
						<h5 class="number">**** **** *153</h5>
						<img src="assets/images/payments/card-check.svg" class="checkmark" width="40px">
					</label>
				</div>

				<div class="card">
					<input name="card" id="card-2" type="radio">
					<label for="card-2">
						<div class="card-image mastercard">
							<img class="svg" width="40px" alt="Card Image">
						</div>
						<h5 class="number">**** **** *153</h5>
						<img src="assets/images/payments/card-check.svg" class="checkmark" width="40px">
					</label>
				</div>

				<div class="card">
					<input name="card" id="card-3" type="radio">
					<label for="card-3">
						<div class="card-image visa">
							<img class="svg" width="40px" alt="Card Image">
						</div>
						<h5 class="number">**** **** *153</h5>
						<img src="assets/images/payments/card-check.svg" class="checkmark" width="40px">
					</label>
				</div>

				<div class="card">
					<input name="card" id="card-4" type="radio">
					<label for="card-4">
						<div class="card-image mastercard">
							<img class="svg" width="40px" alt="Card Image">
						</div>
						<h5 class="number">**** **** *153</h5>
						<img src="assets/images/payments/card-check.svg" class="checkmark" width="40px">
					</label>
				</div>
			</div>
		</section>

		<div class="submit constrain">
			<button type="submit" class="btn btn-primary" name="confirm">Confirm</button>
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