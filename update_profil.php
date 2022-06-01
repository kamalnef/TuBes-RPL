<?php

    include("config.php");
	session_start();

	if(!isset($_SESSION["login"]))
	{
		header("location: login.php");
		exit;
	}

    $id = $_SESSION['id'];
    $profile = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Update Data Profile</title>
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
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-10 ftco-animate">
					<form action="update_profil_submit.php" method="POST" class="billing-form profile-form">
						<h3 class="mb-4 billing-heading">Update Identitas Pengguna</h3>
						<div class="row align-items-end">
							<div class="col-md-6">
                                <?php
                                    $row = mysqli_fetch_assoc($profile);
                                ?>
								<div class="form-group">
									<label for="nama_lengkap">Nama Lengkap</label>
									<input type="text" class="form-control" name="nama_lengkap" value="<?=$_SESSION['nama']?>" >
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="email">E-Mail</label>
									<input type="text" class="form-control" name="email" value="<?=$row['email']?>" >
								</div>
							</div>
							<div class="col-md-12">
                                <div class="form-group">
                                    <label for="alamat_lengkap">Alamat</label>
                                    <textarea cols="109" rows="5" class="form-control textarea" name="alamat_lengkap"><?=$row['alamat_lengkap']?></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="kode_pos">Kode Pos</label>
									<input type="text" class="form-control" name="kode_pos" value="<?=$row['kode_pos']?>" >
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="kota">Kota</label>
									<input type="text" class="form-control" name="kota" value="<?=$row['kota']?>" >
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="nomor_telepon">nomor_telepon</label>
									<input type="text" class="form-control" name="nomor_telepon" value="<?=$row['nomor_telepon']?>" >
								</div>
							</div>
							<div class="col-md-6 btn-update-profil2">
								<div class="form-group">
                                <span><input type="submit" name="update" value="UPDATE" class="btn btn-primary py-3 px-4 btn-update-page"></span>
                                <span><input type="submit" name="cancel" value="CANCEL" class="btn btn-primary py-3 px-4 btn-update-page"></span>
                                <p>woy</p>
								</div>
							</div>
						</div>
					</form>
							</div>
						</div>
					</div>
				</div> <!-- .col-md-8 -->
			</div>
		</div>
	</section> <!-- .section -->

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