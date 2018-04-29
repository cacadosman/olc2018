<?php

//include profile php
include_once "profile.php";
//include sekolah
include_once "sekolah.php";
//include orang tua
include_once "orangtua.php";

$objKtp = new Profile();
$objKtp->setNama("Dyan Galih Nugroho");
//$objKtp->setNamaSekolah("TK");

$objKtpTeman = new Profile();
$objKtpTeman->setNama("Nama teman");

echo $objKtpTeman->getNama();
echo "<br />";
echo $objKtp->getNama();
//echo $objKtp->getNamaSekolah();

