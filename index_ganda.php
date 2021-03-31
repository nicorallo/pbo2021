<?php
 
include('Mahasiswa.php');

$nico = new Mahasiswa();
$faul = new Mahasiswa();
$tri = new Mahasiswa();


$nico->nama = "Nico";
$faul->nama = "Faul";
$tri->nama = "Tri";

$nico->nim = "H1101191013";
$faul->nim = "H1101191045";
$tri->nim = "H1101191016";

$nico->tanggal_lahir = "03 Desember 2000";
$faul->tanggal_lahir = "21 Januari 2021";
$tri->tanggal_lahir = "16 Januari 2021";

$nico->tampilkanNama();
$nico->tampilkanAngkatan();
$nico->tampilkanUmur();

$faul->tampilkanTeman();
$faul->tampilkanAngkatan();
$faul->tampilkanUmur();

$tri->tampilkanLainnya();
$tri->tampilkanAngkatan();
$tri->tampilkanUmur();



 ?>