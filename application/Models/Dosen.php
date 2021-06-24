<?php

namespace App;

require_once("Pegawai.php");
class Dosen extends Pegawai{
    private $nip;
    private $nama;
    private $no_telp;

    function __construct($nip,$nama,$no_telp){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_telp = $no_telp;
       
    }

    public function validasiMahasiswa(){
        echo $this->nama." memvalidasi mahasiswa<br>";
   
    }
}



   

?>