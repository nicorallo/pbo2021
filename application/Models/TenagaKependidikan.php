<?php

namespace App;

require_once("Pengguna.php");
class TenagaKependidikan extends Pengguna{
    private $nip;
    private $nama;
    private $alamat;

    function __construct($nip,$nama,$alamat){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    function hitungTunjanganKinerja(){
        echo $this->nama;
    }
}

?>