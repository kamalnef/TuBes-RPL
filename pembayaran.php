<?php
    include('config.php');
    $kodepesanan = $_GET['key'];
    echo $kodepesanan;
    $query      = mysqli_query($conn,"SELECT * from pesanan where id_pesanan = $kodepesanan");
    $pesanan    = mysqli_fetch_assoc($query);
    $query      = mysqli_query($conn,"SELECT *from produk_pesanan where id_pesanan = $kodepesanan");
    $produk     = mysqli_fetch_assoc($query);
    $opsi    =  $pesanan['id_opsi'];
    $query      = mysqli_query($conn,"SELECT *from opsi_pembayaran where id_opsi = $opsi");
    $bayar     = mysqli_fetch_assoc($query);
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
            <p class="navbar-brand">Pesanan Anda</p>
        </div>
        <div class="form mb-4">
            <div class="box" style="font-size: 14px;">
                <img src="images/barcode.png" alt="" width="320px" height="80px">
                <h4>No Pesanan <?=$pesanan['nomor_pesanan']?></h4>
                <div class="col md-6 ml-2">Nama Penerima     : <?=$pesanan['nama_penerima']?></div>
                <div class="col md-6 ml-2">Provinsi          : <?=$pesanan['provinsi']?></div>
                <div class="col md-6 ml-2">Kota : <?=$pesanan['distrik']?></div>
                <div class="col md-6 ml-2">Alamat Penerima :</div>
                <div class="col md-6 ml-2"><?=$pesanan['alamat_pengiriman']?></div>
                <div class="col md-6 ml-2">Kode Pos : <?=$pesanan['kodepos']?></div>
                <div class="col md-6 ml-2">Pengriman : <?=$pesanan['ekspedisi']?> <?=$pesanan['paket']?> </div>
                <div class="col md-6 ml-2">Metode Pembayaran : <?=$bayar['nama_pembayaran']?></div>
                <div class="col md-6 ml-2">Silahkan Melakukan Pembayaran Ke</div>
                <div class="col md-6 text-center" style="font-family: Helvetica; font-size : 20px;"> <?=$bayar['nomor']?></div>
                <div class="col md-6 text-center" style="font-family: Helvetica; font-size : 20px;">a.n. Rafi Arsalan Miraj</div>
                <div class="col md-6 ml-2">Total Bayar :</div>
                <div class="col md-6 text-center" style="font-family: Helvetica; font-size : 20px;">Rp <?=number_format($pesanan['total_bayar'],0,"",".")?></div>
                <div class="col md-6 ml-2">Status :</div>
                <div class="col md-6 text-center" style="font-family: Helvetica; font-size : 20px;">
                <?php
                    if($pesanan['status_pembayaran'] == 0)
                    {
                        echo "BELUM DIBAYAR";
                    }else if($pesanan['status_pembayaran'] == 1)
                    {
                        echo "MENUNGGU KONFIRMASI";
                    }else if($pesanan['status_pembayaran'] == 2)
                    {
                        echo "LUNAS<br> MENUNGGU PENGIRIMAN";
                    }else if($pesanan['status_pembayaran'] ==3){
                        echo "SUDAH DIKIRIM <br> Resi anda : <br>"; 
                    }
                ?>
                </div>
                <?php
                    if($pesanan['status_pembayaran'] == 0)
                    {
                        echo '<a href="konfirmasi.php?key='.$kodepesanan.'" class="btn btn-info ml-3 mt-3"> Konfirmasi Pembayaran Anda Disini</a>';
                    }else if($pesanan['status_pembayaran'] ==3){
                        echo '<div class="col md-6 text-center" style="font-family: Helvetica; font-size : 20px;">'.$pesanan['resi'].'</div>'; 
                    }
                ?>
                
            </div>
            
            <a href="daftar_pesanan.php" class="btn btn-secondary mt-2 ml-3">Back</a>
        </div>
    </section>
</body>

</html>
