<?php
    if(isset($_POST['cancel'])){
        header("location: admin.php");
        exit();
    }

    include("config.php");

    $key = $_POST['key'];
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

        $query = mysqli_query($conn, "UPDATE produk SET id_kategori = '$id_kategori', nama_produk = '$nama_produk', gambar_produk = '$nm_file', stok_barang = '$stok_barang', deskripsi = '$deskripsi', berat_produk = '$berat_produk', harga_produk = '$harga_produk', bonus_produk = '$bonus_produk', tgl_rilis = '$tgl_rilis', label = '$label', produksi = '$produksi', lokasi_produk = '$lokasi_produk', kondisi_produk = '$kondisi_produk' WHERE id_produk = '$key'");

        if(mysqli_affected_rows($conn) > 0)
        {
            $dir = "images/PRODUCT ALBUM K-FEVER/$nm_file";
            move_uploaded_file($tmp_file, $dir);
            echo "<script>
                alert('Data Berhasil Diupdate!');
                window.location = 'admin.php';
            </script>";
        }
        else
        {
            echo "<script>
                alert('Data Berhasil Diupdate!');
                window.location = 'admin.php';
            </script>";
        }
    }
    else
    {
        $query = mysqli_query($conn, "UPDATE produk SET id_kategori = '$id_kategori', nama_produk = '$nama_produk', stok_barang = '$stok_barang', deskripsi = '$deskripsi', berat_produk = '$berat_produk', harga_produk = '$harga_produk', bonus_produk = '$bonus_produk', tgl_rilis = '$tgl_rilis', label = '$label', produksi = '$produksi', lokasi_produk = '$lokasi_produk', kondisi_produk = '$kondisi_produk' WHERE id_produk = '$key'");

        if(mysqli_affected_rows($conn) > 0)
        {
            echo "<script>
                alert('Data Berhasil Diupdate!');
                window.location = 'admin.php';
            </script>";
        }
        else
        {
            echo "<script>
                alert('Data Gagal Diupdate!');
                window.location = 'admin.php';
            </script>";
        }
    }

?>