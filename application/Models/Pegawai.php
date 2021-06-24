<?php
    namespace App;
    require_once("TenagaKependidikan.php");

    class Pegawai extends TenagaKependidikan
    {
        private $setNip;
        protected $presensiMasuk;
        private $getNip;
        private $setNama;
        private $getNama;

        function __construct($setNip, $presensiMasuk, $getNip, $setNama, $getNama){
            $this->setNip = $setNip;
            $this->presensiMasuk = $presensiMasuk;
            $this->getNip = $getNip;
            $this->setNama = $setNama;
            $this->getNip = $getNama;
        }

    }


?> 