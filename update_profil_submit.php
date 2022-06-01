<?php
    if(isset($_POST['cancel'])){
        header("location: profile.php");
        exit();
    }

    include("config.php");
    session_start();

    $key = $_SESSION['id'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $alamat_lengkap = $_POST['alamat_lengkap'];
    $kode_pos = $_POST['kode_pos'];
    $kota = $_POST['kota'];
    $nomor_telepon = $_POST['nomor_telepon'];

    $query = mysqli_query($conn, "UPDATE user SET nama_lengkap = '$nama_lengkap', email = '$email', alamat_lengkap = '$alamat_lengkap', kode_pos = '$kode_pos', kota = '$kota', nomor_telepon = '$nomor_telepon' WHERE id_user = '$key'");

    if(mysqli_affected_rows($conn) > 0)
    {
        echo "<script>
            alert('Data Berhasil Diupdate!');
            window.location = 'profile.php';
        </script>";
    }
    else
    {
        echo "<script>
            alert('Data Gagal Diupdate!');
            window.location = 'profile.php';
        </script>";
    }

?>