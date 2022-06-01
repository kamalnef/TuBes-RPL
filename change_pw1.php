<?php
    session_start();
    require 'function.php';
    include("config.php");

    if(isset($_POST["login"]))
    {
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
                header("location: change_pw2.php");
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
    <title>Sign In First</title>
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
                <h4>Sign In First</h4>
                <form action="" method="post">
                    <div class="input">
                        <label for="username">Username</label>
                        <input name="username" class="xyz" type="text" id="username" placeholder="Insert Your Username ..." required>
                        <label for="password">Password</label>
                        <input name="password" class="xyz" type="password" id="password" placeholder="Insert Your Password ..." required>
                    </div>
                    <div class="submit submit-c-pw">
                        <button name="login">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>