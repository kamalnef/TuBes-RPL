<?php

require 'function.php';

if(isset($_POST["register"]))
{
    if(registrasi($_POST) > 0)
    {
        echo "<script>
                alert('Registrasi Berhasil!');
                window.location = 'login.php';
            </script>";
    }
    else 
    {
        echo mysqli_error($conn);
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
                        <input class="xyz" type="text" id="username" placeholder="Insert Your Username ..." name="username">
                        <label for="password">Password</label>
                        <input class="xyz" type="password" id="password" placeholder="Insert Your Password ..." name="password">
                        <label for="email">E-Mail</label>
                        <input class="xyz" type="email" id="email" placeholder="Someone@mail.com" name="email">
                        <label for="name">Nama Lengkap</label>
                        <input class="xyz" type="text" id="name" placeholder="Insert Your Name ..." name="name">
                        <label for="telephone">Nomor Telepon</label>
                        <input class="xyz" type="text" id="telephone" placeholder="Insert Your Telephone Number ..." name="telephone">
                        <label for="address">Alamat</label>
                        <input class="xyz" type="text" id="address" placeholder="Insert Your Address ..." name="address">
                        <label for="kodepos">Kode Pos</label>
                        <input class="xyz" type="text" id="kodepos" placeholder="Insert Your Postal Code ..." name="kodepos">
                    </div>
                    <div class="submit">
                        <button name="register">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>