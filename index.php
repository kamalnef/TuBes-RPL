<?php

	include("config.php");
	session_start();
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>K-Fever</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="goto-here">
<div class="header__top py-1 bg-black">
		<div class="container">
			<div class="row atas-nav">
				<div class="col-lg-6 col-md-7">
					<div class="header__top__left">
						<p>Haloo! <?php echo $_SESSION["nama"]; ?></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-5">
					<div class="header__top__right">
						<div class="header__top__links">
							<a href="login.php">Sign in</a>
							<a href="signout.php">Sign out</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
			<div class="col-lg-12 d-block">
				<div class="row d-flex">
					<div class="col-md pr-4 d-flex topper align-items-center">
						<div class="icon mr-2 d-flex justify-content-center align-items-center"><span
								class="icon-phone2"></span>
						</div>
						<span class="text">+ 1235 2355 98</span>
					</div>
					<div class="col-md pr-4 d-flex topper align-items-center">
						<div class="icon mr-2 d-flex justify-content-center align-items-center"><span
								class="icon-paper-plane"></span></div>
						<span class="text">youremail@email.com</span>
					</div>
					<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						<span class="text">3-5 Business days delivery &amp; Free Returns</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">Minishop</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item login"><a href="login.php" class="nav-link">Sign In</a></li>
					<li class="nav-item login"><a href="signout.php" class="nav-link">Sign Out</a></li>
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item dropdown"><a href="shop.php" class="nav-link">Shop</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					<li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span
								class="icon-shopping_cart"></span>[0]</a></li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end"
						data-scrollax-parent="true">
						<img class="one-third order-md-last img-fluid" src="images/banner/BE.png" alt="">
						<div class="one-forth d-flex align-items-center ftco-animate"
							data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">#BE_The_Self</span>
								<div class="horizontal">
									<h1 class="mb-4 mt-3">MAMA 2021's ALBUM OF THE YEAR</h1>
									<p class="mb-4">Rasakan sentuhan langsung BTS dalam menyampaikan pesan mereka dari setiap lagu ke lagu.</p>

									<p><a href="#" class="btn-custom">Discover Now</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-flex no-gutters slider-text align-items-center justify-content-end"
						data-scrollax-parent="true">
						<img class="one-third order-md-last img-fluid" src="images/banner/BTS Memories of 2020 DVD.png" alt="" width="100">
						<div class="one-forth d-flex align-items-center ftco-animate"
							data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">#Memorable_Journeys</span>
								<div class="horizontal">
									<h1 class="mb-4 mt-3">BTS MEMORIES OF 2020 DVD NOW RELEASED</h1>
									<p class="mb-4">Kumpulan kenangan ARMY dan BTS di tahun tersibuk di tengah kesulitan pandemi COVID-19.</p>

									<p><a href="#" class="btn-custom">Discover Now</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">Beloved Products!</h2>
				</div>
		</div>
		</div>
		<div class="container">
			<div class="row">
			<?php
				$query = "SELECT * FROM produk INNER JOIN kategori_barang ON produk.id_kategori = kategori_barang.id_kategori LIMIT 8";
				$result = mysqli_query($conn, $query);
				if(!$result){
				  die ("Query Error: ".mysqli_errno($conn).
				     " - ".mysqli_error($conn));
				}
				while($row = mysqli_fetch_assoc($result))
				{
				?>
				<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
				<div class="product d-flex flex-column">
				    <a href="#" class="img-prod"><img class="img-fluid" src="images/produk/<?=$row['gambar_produk']?>"
				            alt="Colorlib Template">
				        <div class="overlay"></div>
				    </a>
				    <div class="text py-3 pb-4 px-3">
				        <h3><a href="#"><?=$row['nama_produk']?></a></h3>
				        <div class="pricing">
				            <p class="price"><span>Rp <?=$row['harga_produk']?></span></p>
				        </div>
				        <p class="bottom-area d-flex px-3">
				            <a href="#" class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i
				                        class="ion-ios-add ml-1"></i></span></a>
				            <a href="#" class="buy-now text-center py-2">Buy now<span><i
				                        class="ion-ios-cart ml-1"></i></span></a>
				        </p>
				    </div>
				</div>
				</div>
				<?php
				}
				?>

			</div>
		</div>
	</section>

	<section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-4">
					<div class="choose-wrap divider-one img p-5 d-flex align-items-end"
						style="background-image: url(images/sale/choose-1.png);">

						<div class="text text-center text-white px-2">
							<span class="subheading">OUTFIT</span>
							<h2>Summer Feeling's</h2>
							<p>Persiapkan outfit terbaikmu dalam menyambut musim panas dengan official merchandise IN THE SOOP!</p>
							<p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="row no-gutters choose-wrap divider-two align-items-stretch">
						<div class="col-md-12">
							<div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-end"
								style="background-image: url(images/sale/choose-2.png);">
								<div class="col-md-7 d-flex align-items-center">
									<div class="text text-white px-5">
										<span class="subheading">BTS ALBUM</span>
										<h2>Bring The ON: E</h2>
										<p>Rasakan pengalaman menonton konser online BTS, Map of The Soul ON: E!</p>
										<p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row no-gutters">
								<div class="col-md-6">
									<div
										class="choose-wrap wrap img align-self-stretch bg-light d-flex align-items-center">
										<div class="text text-center px-5">
											<span class="subheading">Birthday Celebration Sale</span>
											<h2>6.13 SALE!</h2>
											<p>Dapatkan diskon spesial di perayaan ke-9 tahun BTS!</p>
											<p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="choose-wrap wrap img align-self-stretch d-flex align-items-center"
										style="background-image: url(images/sale/choose-3.png);">
										<div class="text text-center text-white px-5">
											<span class="subheading">BTS MERCH</span>
											<h2>Fit the Outfit</h2>
											<p>Lengkapi gaya stylemu dengan official merchandise IN THE SOOP</p>
											<p><a href="#" class="btn btn-black px-3 py-2">Shop now</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row">
				<div class="mouse">
					<a href="#" class="mouse-icon">
						<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
					</a>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Minishop</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Menu</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Shop</a></li>
							<li><a href="#" class="py-2 d-block">About</a></li>
							<li><a href="#" class="py-2 d-block">Journal</a></li>
							<li><a href="#" class="py-2 d-block">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Help</h2>
						<div class="d-flex">
							<ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
								<li><a href="#" class="py-2 d-block">Shipping Information</a></li>
								<li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
								<li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
								<li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
							</ul>
							<ul class="list-unstyled">
								<li><a href="#" class="py-2 d-block">FAQs</a></li>
								<li><a href="#" class="py-2 d-block">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain
										View, San Francisco, California, USA</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929
											210</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span
											class="text">info@yourdomain.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;
						<script>document.write(new Date().getFullYear());</script> All rights reserved | This template
						is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a
							href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>