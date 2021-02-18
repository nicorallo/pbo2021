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
   
   public function tampilkanTeman()
   {
       echo "si $this->nama dan ";
   }

   public function tampilkanLainnya()
   {
       echo "$this->nama juga merupakan mahasiswa <br>";
   }
}
?>
