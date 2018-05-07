<?php
    if(!isset($_SESSION["username"])){
        header("Location: default.php?page=login");
    }
?>

<h1>Selamat datang admin</h1>