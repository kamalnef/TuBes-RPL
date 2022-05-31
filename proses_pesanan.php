<?php

	include("config.php");
	session_start();
    $query          = mysqli_query($conn, "SELECT max(nomor_pesanan) as kodeTerbesar FROM pesanan");
    $data           = mysqli_fetch_array($query);
    $kodeBarang     = $data['kodeTerbesar'];
    $id_user        = $_SESSION['id'];
    $urutan         = (int) substr($kodeBarang, 4, 3);
    $urutan++;
    $huruf          = "KFVR";
    $nomor_pesanan  = $huruf . sprintf("%03s", $urutan);
    $nama           = $_POST["nama_lengkap"];
    $provinsi       = $_POST["provinsi"];
    $tipe           = $_POST["tipe"];
    $distrik        = $_POST["distrik"];
    $nama_distrik   = "$tipe $distrik";
    $alamat         = $_POST["alamat"];
    $kodepos        = $_POST["kodepos"];
    $ekspedisi      = $_POST["ekspedisi"];
    $paket          = $_POST["pengiriman"];
    $harga          = $_SESSION["total_harga"];
    $ongkir         = $_POST["ongkir"];
    $total_bayar    = $harga + $ongkir;
    $berat          = $_POST["total_berat"];

    if($_POST["pembayaran"] == "ovo"){
        $pembayaran = 1;
    }
    else if($_POST["pembayaran"] == "gopay"){
        $pembayaran = 2;
    }
    else if($_POST["pembayaran"] == "shopeepay"){
        $pembayaran = 3;
    }
    else if($_POST["pembayaran"] == "dana"){
        $pembayaran = 4;
    }
    else if($_POST["pembayaran"] == "transfer"){
        $pembayaran = 5;
    }

    $input = "INSERT INTO pesanan VALUES 
    (' ', '$id_user', '$nomor_pesanan', '$nama', '$provinsi', 
    '$nama_distrik', '$alamat', '$ekspedisi', '$paket', '$kodepos', 
    '$total_bayar', '$pembayaran', '$berat', 0, ' ', ' ' )";
    $query = mysqli_query($conn, $input);

    header("location: input_pesanan.php?key=$nomor_pesanan");
    ?>