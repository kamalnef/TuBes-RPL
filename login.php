<?php
    session_start();
    require 'function.php';
    include("config.php");
    // Cek Cookie
    if(isset($_COOKIE['id']) && isset($_COOKIE['key']))
    {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // Ambil username berdasarkan id
        $result = mysqli_query($conn, "SELECT * FROM user WHERE id_user = $id");
        $row = mysqli_fetch_assoc($result);

        // Bandingkan cookie dan username
        if($key === hash('sha256', $row['username_user']))
        {
            $_SESSION['login'] = true;
            $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
        }
    }

    if(isset($_SESSION["login"]))
    {
        header("location: index.php");
        exit;
    }

    if(isset($_POST["login"]))
    {
        if(($_POST["username"] == 'admin') && ($_POST['password'] == 'admin1234'))
        {
            header("Location: admin.php");
            $_SESSION["admin"] = true;
            $_SESSION["login"] = true;
        }
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username_user = '$username'");
        
        // Cek ketersediaan Username
        if(mysqli_num_rows($result) === 1) 
        {
            $row = mysqli_fetch_assoc($result);
            // Cek kesamaan password
            if(password_verify($password, $row["password_user"]))
            {
                // Set Session
                $_SESSION["login"] = true;
                $id = $row["id_user"];
                $kueri = mysqli_query($conn, "SELECT * FROM cart_id WHERE id_user = $id");
                $jml =0;
                $cart = mysqli_fetch_assoc($kueri);
                // Set Session Buat Nampilin Nama User
                $_SESSION["nama"] = $row["nama_lengkap"];
                $_SESSION["cart"] = $cart["id_cart"];
                $_SESSION["kodepos"] = $row["kode_pos"];
                $_SESSION["id"] = $row["id_user"];
                $_SESSION["alamat"] = $row["alamat_lengkap"];
                $id_cart = $cart["id_cart"];
                $produk = mysqli_query($conn, "SELECT * FROM cart WHERE id_cart = $id_cart");
                while($row = mysqli_fetch_assoc($produk))
								{$jml++;};
                $_SESSION["jml"] = $jml;
                // Cek Remember Me
                if(isset($_POST['remember']))
                {
                    // Set Cookie
                    setcookie('id', $row['id_user'], time()+60);
                    setcookie('key', hash('sha256', $row['username_user']), time()+60);
                }
                header("location: index.php");
                exit;
            }
            else {
                echo "<script>
                    alert('Password Salah!');
                </script>";
            }
        }
        else 
        {
            echo "<script>
                    alert('Username Tidak Terdaftar!');
                    window.location = 'login.php';
                </script>";
        }
    }


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
    <link rel="stylesheet" href="./css/style2.css">
</head>

<body>
    <section class="sign-in">
        <div class="logo">
            <p class="navbar-brand">K-Fever</p>
        </div>
        <div class="form">
            <div class="box">
                <h4>Sign In to Your Account</h4>
                <form action="" method="post">
                    <div class="input">
                        <label for="username">Username</label>
                        <input name="username" class="xyz" type="text" id="username" placeholder="Insert Your Username ..." required>
                        <label for="password">Password</label>
                        <input name="password" class="xyz" type="password" id="password" placeholder="Insert Your Password ..." required>
                        <div class="rm-box">
                            <input type="checkbox" name="remember">
                            <span>Remember Me</span>
                        </div>
                    </div>
                    <div class="submit">
                        <button name="login">SUBMIT</button>
                    </div>
                </form>

                <div class="to-rp">
                    <a class="change-pw a-to-rp" href="change_pw1.php"><strong>Change Password</strong></a>
                    <p class="baru-kah">New to K-Fever? <span class="p-a-to-rp"><a class="a-to-rp" href="register.php"><strong class="">Create an account
                        now!</strong></a></span></p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>