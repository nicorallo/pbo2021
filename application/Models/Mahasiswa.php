<?php
    
    namespace App;
    require_once("Pengguna.php");

    class Mahasiswa extends Pengguna{
        private $nim;
        private $nama;
        private $ipk;
        private $alamat;
        

            function __construct($nim, $nama, $ipk, $alamat){
                $this->nim = $nim;
                $this->nama = $nama;
                $this->ipk = $ipk;
                $this->alamat = $alamat;
            }

                public function inputMatkul(){
            
                    echo $this->nama. ' masukkan nama mata kuliah <br>';
                }
                    public function updateProfil(){
                        echo $this->nama. 'update profil';
                    }
                }
?>