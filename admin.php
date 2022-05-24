<?php

	session_start();

	if(!isset($_SESSION["admin"]))
	{
		header("location: login.php");
		exit;
	}

	$conn = mysqli_connect("localhost", "root", "", "tbsbd");

	if(isset($_POST['tambah']))
	{
		$id_kategori = $_POST['id_kategori'];
		$nama_produk = $_POST['nama_produk'];
		$tmp_file = $_FILES['gambar_produk']['tmp_name'];
		$nm_file = $_FILES['gambar_produk']['name'];
		$stok_barang = $_POST['stok_barang'];
		$deskripsi = $_POST['deskripsi'];
		$berat_produk = $_POST['berat_produk'];
		$harga_produk = $_POST['harga_produk'];
		$bonus_produk = $_POST['bonus_produk'];
		$tgl_rilis = $_POST['tgl_rilis'];
		$label = $_POST['label'];
		$produksi = $_POST['produksi'];
		$lokasi_produk = $_POST['lokasi_produk'];
		$kondisi_produk = $_POST['kondisi_produk'];

		if($nm_file !== "")
		{
			$type_file = $_FILES['gambar_produk']['type'];
			$tipe = explode('/', $type_file);
			$awal = strtolower(reset($tipe));
			if($awal === "image")
			{
				$result = mysqli_query($conn, "INSERT INTO produk VALUES ('', '$id_kategori', '$nama_produk', '$nm_file', '$stok_barang', '$deskripsi', '$berat_produk', '$harga_produk', '$bonus_produk', '$tgl_rilis', '$label', '$produksi', '$lokasi_produk', '$kondisi_produk');");

				if($result)
				{
					$dir = "images/PRODUCT ALBUM K-FEVER/$nm_file";
	
					move_uploaded_file($tmp_file, $dir);
	
					echo "<script>
						alert('Data Berhasil Ditambahkan!');
						window.location = 'admin.php';
					</script>";
				}
				else
				{
					echo "<script>
						alert('Data Gagal Ditambahkan!');
						window.location = 'admin.php';
					</script>";
				}
			}
			else
			{
				echo "<script>
						alert('File Yang Diupload Bukan Gambar!');
						window.location = 'form_new.php.php';
					</script>";
			}
		}
		else
		{
			$result = mysqli_query($conn, "INSERT INTO produk VALUES ('', '$id_kategori', '$nama_produk', 'BE (Deluxe Edition).jpg', '$stok_barang', '$deskripsi', '$berat_produk', '$harga_produk', '$bonus_produk', '$tgl_rilis', '$label', '$produksi', '$lokasi_produk', '$kondisi_produk');");

			if($result)
			{
				echo "<script>
					alert('Data Berhasil Ditambahkan!');
					window.location = 'admin.php';
				</script>";
			}
			else
			{
				echo "<script>
					alert('Data Gagal Ditambahkan!');
					window.location = 'admin.php';
				</script>";
			}
		}
	}

	if (isset($_POST['search'])){
		$filter_key = "%" . $_POST['search'] . "%";
	}
	else{
		$filter_key = "%%";
	}

	$result = mysqli_query($conn, "SELECT * FROM produk WHERE nama_produk LIKE '$filter_key'");
	$products = [];

	while($produk = mysqli_fetch_assoc($result)) {
		$products[] = $produk;
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin Page</title>
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
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Minishop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
			<li class="nav-item"><a href="form_new.php" class="nav-link">Tambah Produk</a></li>
          <li class="nav-item"><a href="signout.php" class="nav-link">Sign Out</a></li>
        </ul>
      </div>
    </div>
  </nav>
	<!-- END nav -->
	<div class="col-md-12 ayayay">
		<div class="col-md-6 search-box">
			<div class="form-group">
				<form action="" method="post">
					<input type="text" class="form-control" placeholder="Masukkan Nama Produk ..." name="search">
				</form>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<div class="cart-list">
						<table class="table">
							<thead class="thead-primary">
								<tr class="text-center">
									<th>Nomor</th>
									<th>Gambar Produk</th>
									<th>Nama Produk</th>
									<th>Stok Produk</th>
									<th>Kondisi Produk</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>

								<!-- Foreach Data Produk -->
								<?php
									$nomor = 1;
									foreach ($products as $product):
								?>

								<tr class="text-center">
									<td class="product-remove">
										<?= $nomor ?>
									</td>

									<td class="image-prod">
										<img src="images/PRODUCT ALBUM K-FEVER/<?= $product['gambar_produk'] ?>" alt="<?= $product['gambar_produk'] ?>" width="100">
									</td>

									<td class="product-name">
										<?= $product['nama_produk'] ?>
									</td>

									<td class="price">
										<?= $product['stok_barang'] ?>
									</td>

									<td class="quantity">
										<?= $product['kondisi_produk'] ?>
									</td>

									<td class="total">
										<a href="update2.php?key=<?= $product['id_produk'] ?>">UPDATE</a> | <a href="delete.php?key=<?= $product['id_produk'] ?>">DELETE</a>
									</td>
								</tr>

								<?php
									$nomor++;
									endforeach;
								?>

								<!-- END TR-->
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

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