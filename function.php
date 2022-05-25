<?php

    include("config.php");

    function registrasi($data) {
        global $conn;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $email = $_POST["email"];
        $name = $_POST["name"];
        $telephone = $_POST["telephone"];
        $address = $_POST["address"];
        $kodepos = $_POST["kodepos"];

        $result = mysqli_query($conn, "SELECT username_user FROM user WHERE username_user = '$username'");

        if(mysqli_fetch_assoc($result))
        {
            echo "<script>
                    alert('Username Telah Digunakan!');
                </script>";
            return false;
        }

        mysqli_query($conn, "INSERT INTO user VALUES('', '$email', '$name', '$telephone', '$kodepos', '$address', '$username', '$password')");

        return mysqli_affected_rows($conn);
    }

?>