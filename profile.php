<?php
class Profile{
    /**
     * Undocumented variable
     *
     * private / protected / public
     */
    private $nama;
    private $alamat;
    private $tempat_lahir;

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }
}

$objKtp = new Profile();
$objKtp->setNama("Dyan Galih");

echo $objKtp->getNama();