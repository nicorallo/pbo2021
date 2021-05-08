<?php 

namespace App;
require_once("Mahasiswa.php");

class MahasiswaBaru extends Mahasiswa
{
    public $no_registrasi;

            function __construct($nim, $nama, $tgl, $jk, $regis)
            {
                $this->nim = $nim;
                $this->nama = $nama;
                $this->tanggal_lahir = $tgl;
                $this->jenis_kelamin = $jk;
                $this->no_registrasi = $regis;
            }

            public function bayarGedung()
            {
                echo "$this->username Anda Telah Membayar Gedung";
            }
            
            public function getNim()
            {
                return $this->nim;
            }

            public function getNama()
            {
                return $this->nama;
            }

            public function getTanggalLahir()
            {
                return $this->tanggal_lahir;
            }

            public function getJenisKelamin()
            {
                return $this->jenis_kelamin;
            }

            public function getNoReg()
            {
                return $this->no_registrasi;
            }

            public function setNim($nim)
            {
                $this->nim = $nim;
            }

            public function setNama($nama)
            {
                $this->nama = $nama;
            }

            public function setTanggalLahir($tgl)
            {
                $this->tanggal_lahir = $tgl;
            }

            public function setJenisKelamin($jk)
            {
                $this->jenis_kelamin = $jk;
            }

            public function setNoReg($no_reg)
            {
                $this->no_registrasi = $no_reg;
            }
            
}
?> 