<?php

namespace App;

require_once("Pegawai.php");
class Dosen extends Pegawai{
    protected $nidn;
    protected $jabatan_akademis;

    function __construct($nip,$nama,$hp,$gp,$nidn,$ja){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $hp;
        $this->gaji_pokok = $gp;
        $this->nidn = $nidn;
        $this->jabatan_akademis = $ja;
    }

    function mengajar(){
        echo $this->nama." sedang mengajar<br>";
    }

    function meneliti(){
        echo $this->nama. " sedang meneliti<br>";
    }

    public function getNip()
    {
        return $this->nip;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getNoTelp()
    {
        return $this->no_hp;
    }

    public function getGajiPokok()
    {
        return $this->gaji_pokok;
    }

    public function getNidn()
    {
        return $this->nidn;
    }

    public function getJabatan()
    {
        return $this->jabatan_akademis;
    }

    public function setNip($nip)
    {
        $this->nip = $nip;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function setNoTelp($hp)
    {
        $this->no_hp = $hp;
    }

    public function setGajiPokok($gp)
    {
        $this->gaji_pokok = $gp;
    }

    public function setNidn($nidn)
    {
        $this->nidn = $nidn;
    }

    public function setJabatan($ja)
    {
        $this->jabatan_akademis = $ja;
    }
}


?>