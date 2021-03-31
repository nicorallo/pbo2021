<?php
class Mahasiswa 
{
   public $nim;
   public $nama;
   public $tanggal_lahir;
   public $jenis_kelamin;
  
   public function tampilkanNama()
   {
       echo " $this->nama adalah mahasiswa <br>";
   }
   
   public function tampilkanAngkatan()
   {
       echo "NIM $this->nim merupakan angkatan 2019 <br>";
   }

   public function tampilkanTeman()
   {
       echo "$this->nama adalah mahasiswa <br> ";
   }

   public function tampilkanLainnya()
   {
       echo "$this->nama adalah mahasiswa <br>";
   }

   public function tampilkanUmur()
   {
       echo "dengan tanggal lahir $this->tanggal_lahir maka $this->nama berumur 20 tahun <br><br>";
   }
}
?>
