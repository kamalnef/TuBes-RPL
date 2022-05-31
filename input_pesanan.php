<?php
    include("config.php");
	session_start();
    $kodepesanan    = $_GET['key'];
    $cart           = $_SESSION['cart'];
    $query          = mysqli_query($conn, "SELECT * FROM pesanan where nomor_pesanan = '$kodepesanan'");
    $data           = mysqli_fetch_array($query);
    $nomor_pesanan  = $data['id_pesanan'];
    $produk         = "SELECT * from cart, produk where cart.id_cart = '$cart'  and cart.id_produk = produk.id_produk;";
	$kueri          = mysqli_query($conn, $produk);
    while($row = mysqli_fetch_assoc($kueri))
		{
            $id_produk = $row['id_produk'];
            $jumlah    = $row['jumlah_barang'];
            $query          = mysqli_query($conn, "INSERT INTO produk_pesanan VALUES ('$nomor_pesanan', '$id_produk', '$jumlah')");
			$_SESSION['total_harga'] += $row['total_harga'];
			$_SESSION['total_berat'] += $row['total_berat'];
		}
    $delete = "DELETE FROM cart WHERE id_cart='$cart'";
    $query  = mysqli_query($conn, $delete);
    
    header("location: pembayaran.php?key=$nomor_pesanan");
?>
