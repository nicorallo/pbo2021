<?php
    
    namespace App;
    require_once("User.php");

    class Mahasiswa extends User{
        protected $nim;
        protected $nama;
        protected $tanggal_lahir;
        protected $jenis_kelamin;
        const AKTIF = 1;
        const NON_AKTIF = 0;
        public static $sks = 5;
        public static $bobot = 6;
        public static $status = self::AKTIF;
        

            function __construct($nim, $nama, $tgl, $jk){
                $this->nim = $nim;
                $this->nama = $nama;
                $this->tanggal_lahir = $tgl;
                $this->jenis_kelamin = $jk;
            }

                public function tampilkanAngkatan(){
                    //$akt = substr($this->nim, 5, -4);

                    $akt = substr($this->nim,5,-4);
                    echo $this->nama. ' merupakan angkatan tahun '. $akt . "<br>";
                }
                    public function tampilkanUmur(){
                        $tgl_lahir = date_create($this->tanggal_lahir);
                        $umur = date_diff($tgl_lahir, date_create("Today"))->y;
                        echo $umur;
                    }

                    public function tampilkanNama(){
                        echo $this->nama;
                    }
                    // setter
                    public function setNama($nama){
                        $this->nama=$nama;
                    }
                    public function setNim($nim){
                        $this->nim=$nim;
                    }
                    public function setTanggalLahir($tanggal_lahir){
                        $this->tanggal_lahir=$tanggal_lahir;
                    }
                    public function setJanisKelamin($jenis_kelamin){
                        $this->jenis_kelamin=$jenis_kelamin;
                    }
                    // getter
                    public function getNama(){
                        return $this->nama;
                    }
                    public function getNim(){
                        return $this->nim;
                    }
                    public function getTanggalLahir(){
                        return $this->tanggal_lahir;
                    }
                    public function getJenisKelamin(){
                        return $this->jenis_kelamin;
                  }
                     //static 
                    
                    public static function bergerak()
                    {
                        echo "agen solusi, bukan agen perubahan <br/>";
                    }

                    final public  function tuntaskan()
                    {
                        self::bergerak();
                        echo "memperbaiki menjadi lebih baik";
                    }

                    public static function hitungSks()
                    {
                        echo "Hasil sks adalah " . self::$sks * self::$bobot;
                    }
    }
?>