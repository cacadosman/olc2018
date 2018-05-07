<?php
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if($username === "admin" && $password === "admin123"){
            $_SESSION["username"] = "admin";
            header("Location: default.php?page=admin");
        }else{
            header("Location: default.php?page=login");
        }
    }else{
        header("Location: default.php?page=login");
    }
?>