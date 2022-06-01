<?php

	session_start();
    include("config.php");

	if(!isset($_SESSION["admin"]))
	{
		header("location: login.php");
		exit;
	}

    if(isset($_GET['id_pesanan']))
    {
        $id_pesanan = $_GET['id_pesanan'];

        mysqli_query($conn, "UPDATE pesanan SET status_pembayaran = '2' WHERE id_pesanan = '$id_pesanan'");

        if(mysqli_affected_rows($conn) > 0)
        {
            echo "<script>
                    alert('Pembayaran Berhasil Dikonfirmasi!');
                    window.location='konfirmasi_admin.php';
                </script>";
        }
        else
        {
            echo "<script>
                    alert('Pembayaran Gagal Dikonfirmasi!');
                    window.location='konfirmasi_admin.php';
                </script>";
        }
    }

	if (isset($_POST['search'])){
		$filter_key = "%" . $_POST['search'] . "%";
	}
	else{
		$filter_key = "%%";
	}

	$result = mysqli_query($conn, "SELECT * FROM pesanan WHERE nomor_pesanan LIKE '$filter_key'");
	$pesanans = [];

	while($pesanan = mysqli_fetch_assoc($result)) {
		$pesanans[] = $pesanan;
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>List Pesanan</title>
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
			<li class="nav-item"><a href="konfirmasi_admin.php" class="nav-link">Konfirmasi Pembayaran</a></li>
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
					<input type="text" class="form-control" placeholder="Masukkan Nomor Pesanan ..." name="search">
				</form>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<div class="cart-list">
						<table class="table kp-table">
							<thead class="thead-primary">
								<tr class="text-center">
									<th>Nomor</th>
									<th>Nomor Pesanan</th>
									<th>Nama Penerima</th>
									<th>Alamat Pengiriman</th>
									<th>Kode Pos</th>
									<th>Total Harga</th>
									<th>Bukti Pembayaran</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>

								<!-- Foreach Data Produk -->
								<?php
									$nomor = 1;
									foreach ($pesanans as $pesanan):
                                        $id_pesanan = $pesanan['id_pesanan'];
								?>
								<tr class="text-center">
									<td class="product-remove">
										<?= $nomor ?>
									</td>

									<td class="nomor-pesanan">
										<?= $pesanan['nomor_pesanan'] ?>
									</td>

									<td class="price">
										<?= $pesanan['nama_penerima'] ?>
									</td>

									<td class="quantity">
										<?= $pesanan['alamat_pengiriman'] ?>
									</td>

									<td class="kode-pos">
										<?= $pesanan['kodepos'] ?>
									</td>

									<td class="harga">
										Rp. <?= number_format($pesanan['total_bayar'],0,"",".")?>
									</td>

									<td class="quantity">
										<a href="images/bukti_pembayaran/<?= $pesanan['bukti_pembayaran'] ?>" class="image-popup prod-img-bg"><img src="images/bukti_pembayaran/<?= $pesanan['bukti_pembayaran'] ?>"
							class="img-fluid" alt="Bukti Pembayaran"></a>
									</td>
                                    
                                    <td class='status'>
                                    <?php
                                    
                                    if($pesanan['status_pembayaran'] == 0)
                                    {
										echo "Belum Dibayar";
                                    }
                                    else if($pesanan['status_pembayaran'] == 1)
                                    {
                                        echo "<a href='konfirmasi_admin.php?id_pesanan=$id_pesanan'>Accept</a>";
                                    }
                                    else if($pesanan['status_pembayaran'] == 2)
                                    {
                                        echo "Sudah Lunas";
                                    }
                                    
                                    ?>
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