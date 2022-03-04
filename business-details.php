<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="author" content="Zero30">
	<meta name="description" content="Business Details">
	<meta name="robots" content="index, follow">

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"> -->
	<!-- <link rel="stylesheet" href="https://unpkg.com/flickity-fullscreen@1/fullscreen.css"> -->
	<link rel="stylesheet" href="assets/css/styles.css" />
	<link rel="stylesheet" href="assets/css/flickity.css">
	<link rel="stylesheet" href="assets/css/fullscreen.css">

	<title>Business Details</title>
</head>

<!-- 
	This page is a bit complex, I have three pages in one.
	They're fixed into tabs and they become active when the tab's button is clicked.

	There's a "".bookmarked" class on the <body> tag, it helps to show that the restaurant is bookmarked by the user. Once the .bookmarked tag is added as a class it styles the bookmark icon in the header.
 -->

<body id="business-details-page" class="bg-offwhite container with-bottom-menu bookmarked">
	
	<!-- So this <section id="header"> has a backgroud image, I don't know if it's meant to be dynamic but I've left a link to the image in the inline style of the section.  -->
	<section id="header" class="constrain header-transparent-image"
		style="background: linear-gradient(0deg, rgba(34, 43, 69, 0.7), rgba(34, 43, 69, 0.7)), url(assets/images/banner/banner2.png);">

		
		<div class="header-actions">
			<a href="discover" class="back link">
				<img class="svg" src="assets/images/icons/arrow-left.svg" width="18px" alt="Go back">
			</a>
			<!-- Bookmark icon -->
			<button type="button" class="btn bookmark">
				<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
			</button>
			<button type="button" class="link options">
				<img class="svg" src="assets/images/icons/options.svg" width="18px" alt="Bookmark">
			</button>
		</div>

		<!-- This shows the name and address of the restaurant -->
		<div class="text">
			<h2 class="name">Kichi Coffee & Drink</h2>
			<p class="address">
				<img class="svg" src="assets/images/icons/map-pointer.svg" height="10px" alt="Store">
				<span>76A Gwarimpa Estate, Abuja</span>
			</p>
			<p class="reviews">
				<img class="svg icon" alt="" src="assets/images/icons/star.svg">
				<b>4.5</b>
				<span>(1256 Reviews)</span>
			</p>
		</div>
	</section>

	<!-- This is that menu at the bottom of every page -->
	<section id="bottom-menu">
		<div class="menu-links">
			<a href="discover" class="link link-secondary active">
				<img class="svg" src="assets/images/icons/menu/home.svg" height="20px" alt="Home">
				<span>Home</span>
			</a>

			<a href="nearby" class="link link-secondary">
				<img class="svg" src="assets/images/icons/menu/nearby.svg" height="20px" alt="Nearby">
				<span>Nearby</span>
			</a>

			<a href="orders" class="link link-secondary">
				<img class="svg" src="assets/images/icons/menu/orders.svg" height="20px" alt="Orders">
				<span>Orders</span>
			</a>

			<a href="favourites" class="link link-secondary">
				<img class="svg" src="assets/images/icons/menu/favourites.svg" height="20px" alt="Favourites">
				<span>Favourites</span>
			</a>

			<a href="profile" class="link link-secondary">
				<img class="svg" src="assets/images/icons/menu/profile.svg" height="20px" alt="Profile">
				<span>Profile</span>
			</a>
		</div>
	</section>

	<!-- 
		This is the tab buttons.
		When you click the buttons they activate the selected tab, clicking it also adds a ".active" class to both the button of the tab and the tab content.
		I have already implemented it using javascript.
	-->
	<section id="tabs" class="constrain">
		<button class="tab active" onclick="openTab(event, 'products')"><span>Products</span></button>
		<button class="tab" onclick="openTab(event, 'reviews')"><span>Reviews</span></button>
		<button class="tab" onclick="openTab(event, 'information')"><span>Information</span></button>
	</section>

	<!-- Tab content -->
	<!-- This is the Products tab -->
	<section id="products" class="tab-content active">
		<div class="section-title with-link constrain">
			<h4>Popular Items</h4>
			<a href="#" class="link link-primary">
				<span>View all</span>
				<img class="svg" src="assets/images/icons/double-chevron-right.svg" height="7px" alt="Arrow Right">
			</a>
		</div>

		<!-- This is a flickity slider of products by this restaurant -->
		<div class="products constrain"
			data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": false, "autoPlay": "10000", "pauseAutoPlayOnHover": true, "dragThreshold": "0", "LazyLoad": false }'>

			<!-- 
				There's a ".bookmarked" class on the products that are bookmarked by the user, Once the .bookmarked tag is added as a class it styles the bookmark icon on top of the product image.
			-->
			<div class="product bookmarked">
				<div class="details">
					<a href="#" class="image">
						<img src="assets/images/products/1.png" height="120px" alt="Fried Noodles Salad and Chicken Wings">
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Fried Noodles Salad and Chicken Wings</a>
						<p>
							<span class="price">₦1,500</span>

							<!-- Clicking the button below brings up the Add to Cart popup. -->
							<button class="btn add-to-cart">
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
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Fried Noodles Salad and Chicken Wings</a>
						<p>
							<span class="price">₦1,500</span>
							<button class="btn add-to-cart">
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
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Fried Noodles Salad and Chicken Wings</a>
						<p>
							<span class="price">₦1,500</span>
							<button class="btn add-to-cart">
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
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Fried Noodles Salad and Chicken Wings</a>
						<p>
							<span class="price">₦1,500</span>
							<button class="btn add-to-cart">
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
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Fried Noodles Salad and Chicken Wings</a>
						<p>
							<span class="price">₦1,500</span>
							<button class="btn add-to-cart">
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
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Fried Noodles Salad and Chicken Wings</a>
						<p>
							<span class="price">₦1,500</span>
							<button class="btn add-to-cart">
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
						<button class="btn bookmark">
							<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
						</button>
					</a>
					<div class="text">
						<a href="#" class="name">Fried Noodles Salad and Chicken Wings</a>
						<p>
							<span class="price">₦1,500</span>
							<button class="btn add-to-cart">
								<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
							</button>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div id="product-categories">
			<div class="section-title constrain">
				<h5>Juice <span>2 items</span></h5>
			</div>

			<!-- 
				There's a ".bookmarked" class on the products that are bookmarked by the user, Once the .bookmarked tag is added as a class it styles the bookmark icon.
			-->
			<div class="product constrain">
				<a href="#" class="image">
					<img src="assets/images/products/3.png" height="120px" alt="Lemon Juice Fresh">
				</a>

				<div class="details">

					<a href="#" class="name">
						<h5>Lemon Juice Fresh</h5>
					</a>

					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>

					<p class="description">Lemon Juice Fresh is valuable to stock for cooking, cleaning.</p>

					<h5 class="price">₦1,300</h5>

					<p class="bag">
						<img class="svg icon" alt="" src="assets/images/icons/bag.svg">
						<span>99+</span>
					</p>

					<span class="line"></span>

					<p class="like">
						<img class="svg icon" alt="" src="assets/images/icons/like.svg">
						<span>26</span>
					</p>

					<button class="btn add-to-cart">
						<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
					</button>

				</div>
			</div>

			<div class="product constrain bookmarked">
				<a href="#" class="image">
					<img src="assets/images/products/4.png" height="120px" alt="Lemon Juice Fresh">
				</a>

				<div class="details">

					<a href="#" class="name">
						<h5>Lemon Juice Fresh</h5>
					</a>

					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>

					<p class="description">Lemon Juice Fresh is valuable to stock for cooking, cleaning.</p>

					<h5 class="price">₦1,300</h5>

					<p class="bag">
						<img class="svg icon" alt="" src="assets/images/icons/bag.svg">
						<span>99+</span>
					</p>

					<span class="line"></span>

					<p class="like">
						<img class="svg icon" alt="" src="assets/images/icons/like.svg">
						<span>26</span>
					</p>

					<button class="btn add-to-cart">
						<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
					</button>

				</div>
			</div>
		</div>

		<div id="product-categories">
			<div class="section-title constrain">
				<h5>Cofee <span>2 items</span></h5>
			</div>

			<div class="product constrain bookmarked">
				<a href="#" class="image">
					<img src="assets/images/products/9.png" height="120px" alt="Black Sugar Coffee">
				</a>

				<div class="details">

					<a href="#" class="name">
						<h5>Black Sugar Coffee</h5>
					</a>

					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>

					<p class="description">Black Sugar Coffee is valuable to stock for cooking, cleaning.</p>

					<h5 class="price">₦350</h5>

					<p class="bag">
						<img class="svg icon" alt="" src="assets/images/icons/bag.svg">
						<span>99+</span>
					</p>

					<span class="line"></span>

					<p class="like">
						<img class="svg icon" alt="" src="assets/images/icons/like.svg">
						<span>26</span>
					</p>

					<button class="btn add-to-cart">
						<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
					</button>

				</div>
			</div>

			<div class="product constrain">
				<a href="#" class="image">
					<img src="assets/images/products/8.png" height="120px" alt="Black Sugar Coffee">
				</a>

				<div class="details">

					<a href="#" class="name">
						<h5>Black Sugar Coffee</h5>
					</a>

					<button class="btn bookmark">
						<img class="svg" src="assets/images/icons/bookmark.svg" height="18px" alt="Bookmark">
					</button>

					<p class="description">Black Sugar Coffee is valuable to stock for cooking, cleaning.</p>

					<h5 class="price">₦450</h5>

					<p class="bag">
						<img class="svg icon" alt="" src="assets/images/icons/bag.svg">
						<span>99+</span>
					</p>

					<span class="line"></span>

					<p class="like">
						<img class="svg icon" alt="" src="assets/images/icons/like.svg">
						<span>26</span>
					</p>

					<button class="btn add-to-cart">
						<img class="svg" src="assets/images/icons/add.svg" height="18px" alt="Add to Cart">
					</button>

				</div>
			</div>

		</div>

	</section>

	<!-- 
		This is the popup that comes up when you click the add to cart button (the plus icon beside every product)
	-->
	<section id="addtocart-popup" class="popup">
		
		<div class="popup-content">

			<!-- This button closes the popup, it has been implemented. -->
			<button type="button" class="close-popup">
				<img class="svg" src="assets/images/icons/close-popup.svg" height="10px" alt="Close Popup">
			</button>

			<h5 class="title constrain">Add New Item</h5>

			<form action="">
			
				<div class="product-details constrain">

					<a href="#" class="image">
						<img src="assets/images/products/4.png" height="120px" alt="Fried Noodles Salad and Chicken Wings">
					</a>

					<div class="details">

						<a href="#" class="name">Lemon Juice Fresh</a>

						<p class="bag">
							<img class="svg icon" alt="" src="assets/images/icons/bag.svg">
							<span>99+</span>
						</p>

						<span class="line"></span>

						<p class="like">
							<img class="svg icon" alt="" src="assets/images/icons/like.svg">
							<span>26</span>
						</p>

						<h5 class="price">₦450</h5>

						<!-- 
							This plus and minus works
						-->
						<div class="quantity">
							<button type="button" class="minus btn"><img class="svg icon" alt="" src="assets/images/icons/minus.svg" height="30px"></button>
							<span class="value">0</span>
							<button type="button" class="plus btn"><img class="svg icon" alt="" src="assets/images/icons/plus.svg" height="30px"></button>
						</div>

					</div>
				</div>

				<div class="attribute-title">
					<div class="h-grid constrain">
						<p>Size</p>
						<p>Price</p>
					</div>
				</div>

				<div class="attributes constrain">
					<div class="h-grid">
						<div class="checkbox">
							<input id="size-s" type="checkbox">
							<span class="check"></span>
							<label for="size-s">Size S <span>(500 ml)</span></label>
						</div>

						<p class="price">₦0</p>
					</div>

					<div class="h-grid">
						<div class="checkbox">
							<input id="size-m" type="checkbox">
							<span class="check"></span>
							<label for="size-m">Size M <span>(750 ml)</span></label>
						</div>

						<p class="price">₦50</p>
					</div>

					<div class="h-grid">
						<div class="checkbox">
							<input id="size-l" type="checkbox">
							<span class="check"></span>
							<label for="size-l">Size L <span>(1100 ml)</span></label>
						</div>

						<p class="price">₦130</p>
					</div>

				</div>

				<div class="attribute-title">
					<div class="h-grid constrain">
						<p>Size</p>
					</div>
				</div>

				<div class="attributes constrain">
					<div class="h-grid">
						<div class="checkbox">
							<input id="lemon" type="checkbox">
							<span class="check"></span>
							<label for="lemon">Add Lemon</label>
						</div>
					</div>

					<div class="h-grid">
						<div class="checkbox">
							<input id="ice" type="checkbox">
							<span class="check"></span>
							<label for="ice">Add Ice</label>
						</div>
					</div>
				</div>

				<div class="note">
					<div class="title">
						<div class="h-grid constrain">
							<p>Note</p>
						</div>
					</div>

					<div class="constrain">
						<textarea name="note" placeholder="Leave a note" id="note"></textarea>
					</div>
				</div>

				<div class="constrain">
					<!-- This button submits this form. -->
					<button type="submit" class="big-cart-btn btn btn-primary">
						<p class="items">1 item</p>
						<p class="price">₦4,150</p>
						<p class="text">Add to Cart</p>
					</button>
				</div>

			</form>
		</div>
		<!-- <div class="popup-overlay"></div> -->
	</section>

	<!-- Tab content -->
	<!-- This is the Reviews tab -->
	<section id="reviews" class="tab-content constrain">

		<div class="section-title with-link">
			<h4>Photos & Videos</h4>
			<a href="#" class="link link-primary">
				<span>View all</span>
				<img class="svg" src="assets/images/icons/double-chevron-right.svg" height="7px" alt="Arrow Right">
			</a>
		</div>
		
		<!-- These are the photos from ratings. -->
		<div class="review-media">
			<a href="#" class="media"><img src="assets/images/products/14.png" height="70px" alt="Review Media"></a>
			<a href="#" class="media"><img src="assets/images/products/15.png" height="70px" alt="Review Media"></a>
			<a href="#" class="media"><img src="assets/images/products/16.png" height="70px" alt="Review Media"></a>
			<a href="#" class="media"><img src="assets/images/products/17.png" height="70px" alt="Review Media"></a>
			<a href="#" class="media"><img src="assets/images/products/18.png" height="70px" alt="Review Media"></a>
		</div>

		<!-- Star Ratings -->
		<div class="star-ratings">
			<h4>Rate</h4>
			<div class="ratings">
				<div class="rating star-5">
					<!-- This is the number of reviews with 5 stars -->
					<span>99+</span>
					<div class="stars">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
					</div>
				</div>
				
				<div class="rating star-4">
					<span>56</span>
					<div class="stars">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
					</div>
				</div>
				
				<div class="rating star-3">
					<span>45</span>
					<div class="stars">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
					</div>
				</div>
				
				<div class="rating star-2">
					<span>12</span>
					<div class="stars">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
					</div>
				</div>
			
				<div class="rating star-1">
					<span>5</span>
					<div class="stars">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
						<img class="svg" src="assets/images/icons/star.svg" height="12px" alt="Star">
					</div>
				</div>
			</div>
		</div>

		<!-- Ratings -->
		<div class="comments">

			<!-- This is a rating with just the star rating -->
			<div class="comment">
				<div class="user-image">
					<img src="assets/images/humans/avatar.png" height="40px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Obiora Anyasi</h5>
					<div class="stars" style="--rating: 4;" aria-label="Rating of this product is 4 out of 5."></div>
					<p class="date">Yesterday</p>
				</div>
			</div>

			<!-- This is a rating with everything: star rating, comment, and media. -->
			<div class="comment">
				<!-- Image of the reviewer -->
				<div class="user-image">
					<img src="assets/images/humans/1.png" height="40px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Dora Akunyili</h5>

					<!-- 
						The number of stars will be changed to 3 stars when you change "--rating: 5;" to "--rating: 3; in the inline styling below. It can also be in decimal format to have precise ratings."
					-->
					<div class="stars" style="--rating: 5;" aria-label="Rating of this product is 5 out of 5."></div>
					<p class="date">Yesterday</p>
					<p class="note">Matcha milk tea very yummy! I like it. Matcha milk tea very yummy! I like it. Matcha milk tea very yummy! I like it.</p>
					<div class="comment-media">
						<a href="#" class="media"><img src="assets/images/products/16.png" height="70px" alt="Review Media"></a>
						<a href="#" class="media"><img src="assets/images/products/15.png" height="70px" alt="Review Media"></a>
						<a href="#" class="media"><img src="assets/images/products/14.png" height="70px" alt="Review Media"></a>
					</div>
				</div>
			</div>

			<!-- This is a rating with just comments -->
			<div class="comment">
				<div class="user-image">
					<img src="assets/images/humans/rider.png" height="40px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Akin Alabi</h5>
					<div class="stars" style="--rating: 3.4;" aria-label="Rating of this product is 3.4 out of 5."></div>
					<p class="date">Yesterday</p>
					<p class="note">Matcha milk tea very yummy! I like it. I like it. Matcha milk tea very yummy! I like it.</p>
				</div>
			</div>

			<!-- This is a rating with just media -->
			<div class="comment">
				<div class="user-image">
					<img src="assets/images/humans/1.png" height="40px" alt="kichi">
				</div>
				<div class="details">
					<h5 class="name">Princess Adeleke</h5>
					<div class="stars" style="--rating: 4;" aria-label="Rating of this product is 4 out of 5."></div>
					<p class="date">Yesterday</p>
					<div class="comment-media">
						<a href="#" class="media"><img src="assets/images/products/16.png" height="70px" alt="Review Media"></a>
						<a href="#" class="media"><img src="assets/images/products/15.png" height="70px" alt="Review Media"></a>
						<a href="#" class="media"><img src="assets/images/products/14.png" height="70px" alt="Review Media"></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Tab content -->
	<section id="information" class="tab-content">
		<div class="v-grid constrain">
			<h5 class="title">Informations</h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati quos, unde molestias laudantium harum
				recusandae asperiores id temporibus sunt earum ipsum cupiditate hic, dolore tempore amet eveniet sit vel
				nam!</p>
		</div>

		<div class="v-grid constrain">
			<h5 class="title">Address</h5>
			<!-- The image in this map div should be replced with an actual map.  -->
			<div class="map">
				<img src="assets/images/others/map-address.png" height="200px" alt="Map">
			</div>
		</div>
	</section>

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