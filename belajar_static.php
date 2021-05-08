<?php 

require('vendor/autoload.php');

use App\Mahasiswa;

Mahasiswa::bergerak();

echo Mahasiswa::$status . "<br/>";


$status_mahasiswa = Mahasiswa::NON_AKTIF;
$sks = Mahasiswa::hitungSks();


echo $status_mahasiswa . "<br/>";
echo $sks;
 ?>