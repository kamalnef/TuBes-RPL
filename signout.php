<?php

    session_start();

    if(!isset($_SESSION["login"]))
    {
        header("location: index.php");
        exit;
    }

    $_SESSION = [];
    session_unset();
    session_destroy();

    setcookie('id', '', time() - 3600);
    setcookie('key', '', time() - 3600);

    header("location: login.php");
    exit;

?>