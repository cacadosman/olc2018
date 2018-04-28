<?php

    /**
     * check data from get
     * pritn_r($_GET);
     * sample http://localhost/olc/index.php?nama=Dyan%20Galih%20Nugroho%20Wicaksi&alamat=Dongkelan
     */

    /*
        input
        validation data if needed
    */

    $ktp["nama"] = $_GET["nama"];
    $ktp["alamat"] = $_GET["alamat"];
    $ktp["tempat_lahir"] = "Bantul";
    $ktp["tanggal_lahir"] = "";
    $ktp["rt"] = "";
    $ktp["sex"] = false;
    $ktp["masa_belaku"] = "2018-01-01";
    
    //proses

    $ktp["ttl"] = $ktp["tempat_lahir"] . " , " . $ktp["tanggal_lahir"];

    function jenisKelamin($sex){
        if($sex){
            return "perempuan";
        }else{
            return "laki-laki";
        }
    }

    // function testRecursive($nomor){
    //     if($nomor<10){
    //         $nomor++;
    //         echo $nomor;
    //         echo "<br />";
    //         testRecursive($nomor);
    //     }
    // }

    // testRecursive(0);
    // exit;

    /*
        output
    */

    function writeData($data){
        echo $data;
        echo "<br />";
        echo "<hr />";
    }

    writeData("<h2>Profile</h2>");
    writeData("Nama : " . $ktp["nama"]);
    writeData("ALamat : " . $ktp["alamat"]);
    writeData("Jenis Kelamin : ". jenisKelamin($ktp["sex"]));
    
    // echo "<h2>Profile</h2>";
    // echo "Nama : " . $ktp["nama"];
    // echo "<br />";
    // echo "<hr />";
    // echo "Alamat :" . $ktp["alamat"];
    // echo "<br />";
    // echo "<hr />";
    // // echo "Jenis Kelamin : " . $ktp["jk"];
    // // echo "<br />";
    // echo "Ttl : " . $ktp["ttl"];