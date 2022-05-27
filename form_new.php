<?php

	session_start();

	if(!isset($_SESSION["admin"]))
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
	<link rel="stylesheet" href="css/style2.css">
</head>

<body class="goto-here">

	<section class="ftco-section update-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10 ftco-animate">
					<form action="admin.php" class="billing-form" method="post" enctype="multipart/form-data">
						<h3 class="mb-4 billing-heading">Tambah Data Produk</h3>
						<div class="row align-items-end">
							<div class="col-md-6">
								<div class="form-group">
									<label for="nama_produk">Nama Produk</label>
									<input type="text" class="form-control" placeholder="Masukkan Nama Produk ..." name="nama_produk" id="nama_produk">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="gambar_produk">Gambar Produk</label>
									<input type="file" class="form-control" name="gambar_produk" id="gambar_produk">
								</div>
							</div>
							<div class="w-100"></div>
							<?php
							
								include("config.php");

								$query = "SELECT * FROM kategori_barang";

								$result = mysqli_query($conn, $query);
							
							?>
							<div class="col-md-12">
								<div class="form-group">
									<label for="id_kategori">Kategori Produk</label>
									<div class="select-wrap">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select name="id_kategori" id="id_kategori" class="form-control">
											<?php
												while($row = mysqli_fetch_assoc($result)) {
											?>
											<option value="<?= $row['id_kategori'] ?>"><?= $row['nama_kategori'] ?></option>
											<?php
												}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="stok_barang">Stok Barang</label>
									<input type="number" class="form-control" placeholder="Masukkan Stok Barang ..." name="stok_barang" id="stok_barang">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
                                    <label for="deskripsi">Deskripsi Produk</label>
									<input type="text" class="form-control" placeholder="Masukkan Deskripsi Barang ..." name="deskripsi" id="deskripsi">
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="berat_produk">Berat Produk</label>
									<input type="text" class="form-control" placeholder="Masukkan Berat Produk ..." name="berat_produk" id="berat_produk">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="harga_produk">Harga Produk</label>
									<input type="text" class="form-control" placeholder="Masukkan Harga Produk ..." name="harga_produk" id="harga_produk">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="bonus_produk">Bonus Produk</label>
									<input type="text" class="form-control" placeholder="Masukkan Bonus Produk ..." name="bonus_produk" id="bonus_produk">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="tgl_rilis">Tanggal Rilis</label>
									<input type="date" class="form-control" name="tgl_rilis" id="tgl_rilis">
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="label">Label</label>
									<input type="text" class="form-control" placeholder="Masukkan Nama Label ..." name="label" id="label">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="prouksi">Produksi</label>
									<input type="text" class="form-control" placeholder="Masukkan Nama Produksi ..." name="produksi" id="produksi">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="lokasi_produk">Lokasi Produk</label>
									<input type="text" class="form-control" placeholder="Masukkan Lokasi Produk ..." name="lokasi_produk" id="lokasi_produk">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="kondisi_produk">Kondisi Produk</label>
									<input type="text" class="form-control" placeholder="Masukkan Kondisi Produksi ..." name="kondisi_produk" id="kondisi_produk">
								</div>
							</div>
							<div class="w-100"></div>
						</div>
                        <span><input type="submit" name="tambah" value="Tambah" class="btn btn-primary py-3 px-4 btn-update-page"></span>
                        <span><input type="submit" name="cancel" value="cancel" class="btn btn-primary py-3 px-4 btn-update-page"></span>
					</form>

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