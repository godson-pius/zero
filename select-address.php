<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Zero30">
	<meta name="description" content="Delivery Location">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">

	<title>Delivery Location</title>
</head>

<body id="delivery-location-page" class="container bg-offwhite">
	<section id="header" class="header-white">
		<div class="header-actions constrain">
			<a href="address" class="back link">
				<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
			</a>

			<h4>Delivery Location</h4>
		</div>
	</section>

	<!-- The image in this map div should be replced with an actual map.  -->
	<section id="map" class="constrain">
		<img src="assets/images/others/pointer-on-map.png" height="100px" alt="Restaurant Image">
	</section>

	<section id="add-address-popup" class="popup active">
		<button type="button" class="close-popup">
			<img class="svg" src="assets/images/icons/close-popup.svg" height="8px" alt="Close Popup">
		</button>
		<div class="popup-content">
			<h5 class="title constrain">Type your Address</h5>

			<form action="" class="constrain">
				<input name="address-search" placeholder="Search your address" value="330 15th Eighth Avenue, New York" type="text" />

				<button type="submit" class="btn btn-primary" name="add-address">Add new address</button>
			</form>
		</div>
		<!-- <div class="popup-overlay"></div> -->
	</section>

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"></script> -->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/flickity.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/smooth-scroll.js"></script>

	<script>
		var modal = document.getElementById("add-address-popup");
		var btn = document.getElementsByClassName("add-to-cart");
		var span = document.getElementsByClassName("close")[0];

		$(".add-to-cart").click(function () {
			var $modal = $('#add-address-popup');
			$modal.addClass('active');
		});

		$(".close-popup").click(function () {
			var $modal = $('#add-address-popup');
			$modal.toggleClass('active');
		});

		window.onclick = function (event) {
			if (event.target == modal) {
				var $modal = $('#add-address-popup');
				$modal.removeClass('active');
			}
		}
	</script>
</body>

</html>