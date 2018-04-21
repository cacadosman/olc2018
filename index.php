<?php

    /**
     * check data from get
     * pritn_r($_GET);
     * sample http://localhost/olc/index.php?nama=Dyan%20Galih%20Nugroho%20Wicaksi&alamat=Dongkelan
     */

    /*
        input
    */

    $ktp["nama"] = $_GET["nama"];
    $ktp["alamat"] = $_GET["alamat"];
    $ktp["ttl"] = "";
    $ktp["rt"] = "";
    $ktp["sex"] = true;
    $ktp["masa_belaku"] = "2018-01-01";
    
    //proses

    if($ktp["sex"]){
        $ktp["jk"] = "perempuan";
    }else{
        $ktp["jk"] = "laki-laki";
    }

    /*
        output
    */

    //echo json_encode($ktp); exit;
    
    echo "<h2>Profile</h2>";
    echo $ktp["nama"];
    echo "<br />";
    echo $ktp["alamat"];
    echo "<br />";
    echo $ktp["sex"];
