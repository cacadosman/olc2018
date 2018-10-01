<?php
    if(!isset($_SESSION["username"])){
        header("Location: default.php?page=login");
    }
?>

<h1>Welcome Admin</h1>
