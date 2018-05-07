<?php
    session_start();
    include_once "route.php";

    if(isset($_GET["page"])){
        $page = $_GET["page"];

        if($page == "profile"){
            $profile = new Profile();
            $profile->setNama("fadli");
            echo $profile->getNama();
        }elseif($page == "sekolah"){
            $sekolah = new Sekolah();
            $sekolah->setAlamat("Jl. abcd");
            echo $sekolah->getAlamat();
        }elseif($page == "login"){
            include_once "login_form.php";
        }elseif($page == "admin"){
            include_once "admin.php";
        }else{
            echo "Halaman tidak ditemukan";
        }
    }elseif(isset($_GET["action"])){
        $action = $_GET["action"];

        if($action == "login"){
            include_once "login.php";
        }elseif($action == "logout"){
            include_once "logout.php";
        }else{
            echo "Aksi tidak ditemukan";
        }
    }else{
        echo "Selamat datang di web ini.";
    }
