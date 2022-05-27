<?php

        session_start();
		if(!isset($_GET['key'])){
			header("location: shop.php");
			exit();
		}
		$key = $_GET['key'];
		include("config.php");
        $query = mysqli_query($conn, "SELECT * FROM cart WHERE id_produk = '$key'");
        
        if(mysqli_fetch_array($query)){
            echo "<script>
            alert('Produk sudah ada di keranjang Anda');
            window.location = 'product-single.php?key=$key';
            </script>";
        }else{
		$query = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '$key' limit 1");
        if(isset($_GET['qty'])){
            $jml = $_GET['qty'];
        }else{
            $jml = 1;
        }
		$data = mysqli_fetch_array($query);
		$id_kategori = $data['id_kategori'];
		$nama_produk = $data['nama_produk'];
		$gambar_produk = $data['gambar_produk'];
		$stok_barang = $data['stok_barang'];
		$deskripsi = $data['deskripsi'];
		$berat_produk = ($data['berat_produk'] * $jml);
		$harga_produk = ( $data['harga_produk'] * $jml );
		$bonus_produk = $data['bonus_produk'];
		$tgl_rilis = $data['tgl_rilis'];
		$label = $data['label'];
		$produksi = $data['produksi'];
		$lokasi_produk = $data['lokasi_produk'];
		$kondisi_produk = $data['kondisi_produk'];
        $cart = $_SESSION["cart"];

        $val = "INSERT INTO cart VALUES ('$cart', '$key', '$jml', '$harga_produk', '$berat_produk')";
        $input = mysqli_query($conn, $val);
            echo "<script>
            alert('Produk Berhasil Ditambahkan Ke keranjang anda');
            window.location = 'product-single.php?key=$key'
            </script>";
        }
	?>