<?php
    require 'function.php';

    if(isset($_POST["change-pw"]))
    {
        if(changePw($_POST) > 0)
        {
            echo "<script>
                    alert('Password Berhasil Diganti!');
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
    <title>Change Password</title>
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
                <h4>Change Password</h4>
                <form action="change_pw2.php" method="post">
                    <div class="input">
                        <label for="password1">New Password</label>
                        <input name="password1" class="xyz" type="password" id="password1" placeholder="Insert Your New Password ..." required>
                        <label for="password2">Verify Password</label>
                        <input name="password2" class="xyz" type="password" id="password2" placeholder="Verify Your New Password ..." required>
                    </div>
                    <div class="submit">
                        <button name="change-pw">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>