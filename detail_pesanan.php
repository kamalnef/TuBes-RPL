<?php

	session_start();

	if(!isset($_SESSION["login"]))
	{
		header("location: login.php");
		exit;
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Minishop - Free Bootstrap 4 Template by Colorlib</title>
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
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
					<li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span
								class="icon-shopping_cart"></span>[0]</a></li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Checkout</span>
					</p>
					<h1 class="mb-0 bread">Checkout</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10 ftco-animate">
					<form action="proses_pesanan.php" method="POST" class="billing-form">
						<h3 class="mb-4 billing-heading">Detail Pesanan</h3>
						<div class="row align-items-end">
							<div class="col-md-6">
								<div class="form-group">
									<label for="lastname">Nama Lengkap</label>
									<input type="text" class="form-control" name="nama_lengkap" value="<?=$_SESSION['nama']?>" >
								</div>
							</div>
							<div class="col-md-6">
								<input type="hidden" name="total_berat" value="<?=$_SESSION['total_berat']?>">
								<div class="form-group">
									<label for="province">Provinsi</label>
									<select class="form-control" name="nama_provinsi" style="color: black;">
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="towncity">Kota / Kabupaten</label>
									<select class="form-control" name="nama_distrik" style="color: black;">
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="pengiriman">Opsi Pembayaran</label>
									<select class="form-control" name="pembayaran" style="color: black;" placeholder="Pilih opsi pembayaran">
									<option value='gopay'>Gopay</option>
									<option value='shopeepay'>Shopeepay</option>
									<option value='dana'>Dana</option>
									<option value='ovo'>OVO</option>
									<option value='transfer'>Transfer Bank</option>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<select class="form-control" name="" style="color: black;">
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="alamat">Alamat Lengkap</label>
									<input type="text" class="form-control" value="<?=$_SESSION['alamat']?>" name="alamat">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="kodepos">Kode Pos</label>
									<input type="text" class="form-control" value="<?=$_SESSION['kodepos']?>" name="kodepos">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="ekspedisi">Pilih Ekspedisi</label>
									<select class="form-control" name="nama_ekspedisi" style="color: black;">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="hidden" class="form-control" placeholder="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="pengiriman">Opsi Pengiriman</label>
									<select class="form-control" name="nama_pengiriman" style="color: black;">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="hidden" class="form-control" name="provinsi">
									<input type="hidden" class="form-control" name="tipe">
									<input type="hidden" class="form-control" name="distrik">
									<input type="hidden" class="form-control" name="ekspedisi">
									<input type="hidden" class="form-control" name="pengiriman">
									<input type="hidden" class="form-control" name="ongkir">
								</div>
							</div>
						</div>
				
						<button type="submit">Pesan sekarang</button>
					</form>
								
							</div>
						</div>
					</div>
				</div> <!-- .col-md-8 -->
			</div>
		</div>
	</section> <!-- .section -->


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
		$(document).ready(function(){
			$.ajax({
				type:'POST',
				url:'dataprovinsi.php',
				success:function(hasil_provinsi)
				{
					$("select[name=nama_provinsi]").html(hasil_provinsi)
					console.log(hasil)
				}
			});

			$("select[name=nama_provinsi]").on("change",function(){
				var id_provinsi_terpilih = $("option:selected",this).attr("id_provinsi");

				$.ajax({
					type:'POST',
					url:'datadistrik.php',
					data:'id_provinsi='+id_provinsi_terpilih,	
					success:function(hasil_distrik){
						$("select[name=nama_distrik]").html(hasil_distrik);
					}
				});
			});

			$.ajax({
					type:'POST',
					url:'dataekspedisi.php',	
					success:function(hasil_ekspedisi){
						$("select[name=nama_ekspedisi]").html(hasil_ekspedisi);
					}
				});

			$("select[name=nama_ekspedisi").on("change", function(){

				var ekspedisi_terpilih = $("select[name=nama_ekspedisi]").val();

				var distrik_terpilih = $("option:selected", "select[name=nama_distrik]").attr("id_distrik");
				
				var total_berat = $("input[name=total_berat]").val();
				$("input[name=ekspedisi]").val(ekspedisi_terpilih)
				
				$.ajax({
					type:'POST',
					url:'datapaket.php',
					data:'ekspedisi='+ekspedisi_terpilih+'&distrik='+distrik_terpilih+'&berat='+total_berat,
					success:function(hasil_pengiriman){
						$("select[name=nama_pengiriman]").html(hasil_pengiriman);
					}
				})
			});

			$("select[name=nama_distrik]").on("change", function(){
				var prov = $("option:selected", this).attr("nama_provinsi");
				var tipe = $("option:selected", this).attr("tipe_distrik");
				var dist = $("option:selected", this).attr("nama_distrik");

				$("input[name=provinsi]").val(prov)
				$("input[name=tipe]").val(tipe)
				$("input[name=distrik]").val(dist)
			})

			$("select[name=nama_pengiriman]").on("change", function(){
				var pengiriman = $("option:selected", this).attr("pengiriman");
				var ongkir = $("option:selected", this).attr("ongkir");

				$("input[name=pengiriman]").val(pengiriman);
				$("input[name=ongkir]").val(ongkir);
			})
		})
	</script>
</body>

</html>