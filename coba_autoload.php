<?php 

require_once('vendor/autoload.php');

use App\frontend\MyDate as FMyDate;
use App\MyDate;

$tanggal = new FMyDate();
$tgl = new FMyDate();

$tgl->setDay(22);
$tgl->setMonth(4);
$tgl->setYear(2021);

echo $tgl->getYear();
echo $tanggal->penanggalan();

 ?>