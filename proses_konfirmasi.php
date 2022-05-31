<?php
include 'config.php';

$nomor_pesanan = $_POST['nomor'];
$gambar        = $_FILES['bukti']['name'];
  
if($gambar != "") {
  $ekstensi_diperbolehkan = array('jpg', 'png'); 
  $x = explode('.', $gambar); 
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['bukti']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar;
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'images/bukti_pembayaran/'.$nama_gambar_baru); 
                  $query = "UPDATE pesanan 
                  SET status_pembayaran = 1, bukti_pembayaran = '$nama_gambar_baru' 
                  WHERE id_pesanan = '$nomor_pesanan'";
                  $result = mysqli_query($conn, $query);
                  
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Bukti Pembayaran Berhasil Diupload');window.location='pembayaran.php?key=".$nomor_pesanan."';</script>";
                  }

            } else {     
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='konfirmasi.php';</script>";
            }
}