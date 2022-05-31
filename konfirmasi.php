<?php
    include('config.php');
    $kodepesanan = $_GET['key'];
    $query      = mysqli_query($conn,"SELECT * from pesanan where id_pesanan = $kodepesanan");
    $pesanan    = mysqli_fetch_assoc($query);
    $query      = mysqli_query($conn,"SELECT *from produk_pesanan where id_pesanan = $kodepesanan");
    $produk     = mysqli_fetch_assoc($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In to K-Fever</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section class="sign-in mt-5">
        <div class="logo">
            <p class="navbar-brand">Konfirmasi Pembayaran</p>
        </div>
        <div class="form mb-4">
        <form method="POST" action="proses_konfirmasi.php" enctype="multipart/form-data" >
            <div class="box" style="font-size: 14px;">
                <label for="">Silahkan Upload bukti pembayaran anda</label>
                <input type="file" name="bukti" required="" />
                <input type="hidden" name="nomor" id="" value="<?=$kodepesanan?>">
            </div>
            <div class="mt-3"> 
                <button type="submit" class="btn btn-success">Submit Bukti Pembayaran</button>
                <a href="daftar_pesanan.php" class="btn btn-secondary">Back</a>
            </div>
        </form>
        </div>
    </section>
</body>

</html>
