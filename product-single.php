<?php

	session_start();
	include("config.php");
	
	if(!isset($_GET['key'])){
		header("location: shop.php");
		exit();
	}

	$key = $_GET['key'];


	$query = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '$key' limit 1");

	$data = mysqli_fetch_array($query);
	$id_kategori = $data['id_kategori'];
	$nama_produk = $data['nama_produk'];
	$gambar_produk = $data['gambar_produk'];
	$stok_barang = $data['stok_barang'];
	$deskripsi = $data['deskripsi'];
	$berat_produk = $data['berat_produk'];
	$harga_produk = $data['harga_produk'];
	$bonus_produk = $data['bonus_produk'];
	$tgl_rilis = $data['tgl_rilis'];
	$label = $data['label'];
	$produksi = $data['produksi'];
	$lokasi_produk = $data['lokasi_produk'];
	$kondisi_produk = $data['kondisi_produk'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $nama_produk ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

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
	<link rel="stylesheet" href="css/style3.css">
</head>

<body class="goto-here">
	<div class="header__top py-1 bg-black">
		<div class="container">
			<div class="row atas-nav">
				<div class="col-lg-6 col-md-7">
					<div class="header__top__left">
						<?php
							
							if(isset($_SESSION["login"]))
							{
								echo "<p>Haloo! " . $_SESSION["nama"] . "</p>";
							}
						
						?>
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
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					<li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
					<li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span
								class="fa-solid fa-cart-shopping"></span>[0]</a></li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Shop</span></p>
					<h1 class="mb-0 bread">Shop</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-5 ftco-animate">
					<a href="images/produk/<?= $gambar_produk; ?>" class="image-popup prod-img-bg"><img src="images/produk/<?= $gambar_produk; ?>"
							class="img-fluid" alt="Colorlib Template"></a>
				</div>
				<div class="col-lg-6 product-details pl-md-5 ftco-animate">
					<h3 style="font-weight: 700;"><?= $nama_produk; ?></h3>
					<p class="price"><span>Rp <?=number_format($harga_produk,0,"",".")?></span></p>
					<div class="detail-product">
						<div class="atribut-product">
							<p><i class="fas fa-caret-right"></i> &nbsp; Berat Produk</p>
							<p><i class="fas fa-caret-right"></i> &nbsp; Bonus Produk</p>
							<p><i class="fas fa-caret-right"></i> &nbsp; Tanggal Rilis</p>
							<p><i class="fas fa-caret-right"></i> &nbsp; Label</p>
							<p><i class="fas fa-caret-right"></i> &nbsp; Produksi</p>
							<p><i class="fas fa-caret-right"></i> &nbsp; Lokasi Produk</p>
							<p><i class="fas fa-caret-right"></i> &nbsp; Kondisi Produk</p>
						</div>
						<div class="value-product">
							<p><?= $berat_produk; ?> Gram</p>
							<p><?= $bonus_produk; ?></p>
							<p><?= $tgl_rilis; ?></p>
							<p><?= $label; ?></p>
							<p><?= $produksi; ?></p>
							<p><?= $lokasi_produk; ?></p>
							<p><?= $kondisi_produk; ?></p>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-md-6">
							<div class="form-group d-flex">
								<div class="select-wrap">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="" id="" class="form-control">
										<option value="">Small</option>
										<option value="">Medium</option>
										<option value="">Large</option>
										<option value="">Extra Large</option>
									</select>
								</div>
							</div>
						</div>
						<div class="w-100"></div>
						<form action="add_cart.php" method="GET" enctype="multipart/form-data">
						<div class="input-group col-md-6 d-flex mb-3">
							<input type="hidden" name="key" value="<?= $key; ?>?">
							<label for="qty" class=" mt-1 mr-4">Jumlah Barang</label>
							<input type="number" id="qty" name="qty" class="quantity form-control input-number"
								value="1" min="1" max="<?= $stok_barang; ?>">
							<span><input type="submit" name="save" value="Add To Cart" class="btn btn-black py-3 px-4 mt-2"></span>
						</div>
						</form>
						<div class="w-100"></div>
						<div class="col-md-12">
							<p style="color: #000;"><?= $stok_barang; ?> piece available</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-md-12 nav-link-wrap">
					<div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist"
						aria-orientation="vertical">
						<a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill"
							href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Description</a>
					</div>
				</div>
				<div class="col-md-12 tab-wrap">

					<div class="tab-content bg-light" id="v-pills-tabContent">

						<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
							aria-labelledby="day-1-tab">
							<div class="p-4">
								<h3 class="mb-4" style="font-weight: 700;"><?= $nama_produk; ?></h3>
								<p><?= $deskripsi; ?></p>
							</div>
						</div>

						<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
							<div class="p-4">
								<h3 class="mb-4">Manufactured By Nike</h3>
								<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came
									from it would have been rewritten a thousand times and everything that was left from
									its origin would be the word "and" and the Little Blind Text should turn around and
									return to its own, safe country. But nothing the copy said could convince her and so
									it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk
									with Longe and Parole and dragged her into their agency, where they abused her for
									their.</p>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
							<div class="row p-4">
								<div class="col-md-7">
									<h3 class="mb-4">23 Reviews</h3>
									<div class="review">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="desc">
											<h4>
												<span class="text-left">Jacob Webb</span>
												<span class="text-right">14 March 2018</span>
											</h4>
											<p class="star">
												<span>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
												</span>
												<span class="text-right"><a href="#" class="reply"><i
															class="icon-reply"></i></a></span>
											</p>
											<p>When she reached the first hills of the Italic Mountains, she had a last
												view back on the skyline of her hometown Bookmarksgrov</p>
										</div>
									</div>
									<div class="review">
										<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
										<div class="desc">
											<h4>
												<span class="text-left">Jacob Webb</span>
												<span class="text-right">14 March 2018</span>
											</h4>
											<p class="star">
												<span>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
												</span>
												<span class="text-right"><a href="#" class="reply"><i
															class="icon-reply"></i></a></span>
											</p>
											<p>When she reached the first hills of the Italic Mountains, she had a last
												view back on the skyline of her hometown Bookmarksgrov</p>
										</div>
									</div>
									<div class="review">
										<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
										<div class="desc">
											<h4>
												<span class="text-left">Jacob Webb</span>
												<span class="text-right">14 March 2018</span>
											</h4>
											<p class="star">
												<span>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
												</span>
												<span class="text-right"><a href="#" class="reply"><i
															class="icon-reply"></i></a></span>
											</p>
											<p>When she reached the first hills of the Italic Mountains, she had a last
												view back on the skyline of her hometown Bookmarksgrov</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="rating-wrap">
										<h3 class="mb-4">Give a Review</h3>
										<p class="star">
											<span>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												(98%)
											</span>
											<span>20 Reviews</span>
										</p>
										<p class="star">
											<span>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												(85%)
											</span>
											<span>10 Reviews</span>
										</p>
										<p class="star">
											<span>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												(98%)
											</span>
											<span>5 Reviews</span>
										</p>
										<p class="star">
											<span>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												(98%)
											</span>
											<span>0 Reviews</span>
										</p>
										<p class="star">
											<span>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												(98%)
											</span>
											<span>0 Reviews</span>
										</p>
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
            <h2 class="ftco-heading-2">K-Fever</h2>
            <p>Accessible, guaranteed, and affordable k-pop shop.</p>
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
              <li><a href="index.php" class="py-2 d-block">Home</a></li>
              <li><a href="shop.php" class="py-2 d-block">Shop</a></li>
              <li><a href="about.php" class="py-2 d-block">About</a></li>
              <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
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
                <li><a href="#" class="py-2 d-block">Delivery</a></li>
                <li><a href="#" class="py-2 d-block">Payment Methods</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San
                    Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
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
            <script>document.write(new Date().getFullYear());</script> Shopee. <br>Trademarks belong to their respective owners. All rights reserved.
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

	<script>
		$(document).ready(function () {

			var quantitiy = 0;
			$('.quantity-right-plus').click(function (e) {

				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				$('#quantity').val(quantity + 1);


				// Increment

			});

			$('.quantity-left-minus').click(function (e) {
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				// Increment
				if (quantity > 0) {
					$('#quantity').val(quantity - 1);
				}
			});

		});
	</script>

</body>

</html>