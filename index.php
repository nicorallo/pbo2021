<?php
 
include('Mahasiswa.php');

$nico = new Mahasiswa();
$faul = new Mahasiswa();
$tri = new Mahasiswa();

$nico->nama = "Nico";
$faul->nama = "Faul";
$tri->nama = "Tri";

$nico->tampilkanNama();

$faul->tampilkanTeman();

$tri->tampilkanLainnya();



 ?>