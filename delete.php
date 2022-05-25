<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Delete Data Product</title>
</head>
<body>
    <?php

    if(!isset($_GET['key'])){
        header("location: admin.php");
        exit();
    }

    $key = $_GET['key'];

    include("config.php");

    $query = mysqli_query($conn, "DELETE FROM produk WHERE id_produk = '$key'");

    if(mysqli_affected_rows($conn) > 0)
    {
        echo "<script>
                alert('Data Berhasil Dihapus!');
                window.location = 'admin.php';
            </script>";
        }
    else 
    {
        echo "<script>
                alert('Data Gagal Dihapus!');
                window.location = 'admin.php';
            </script>";
    }

    ?>
</body>
</html>