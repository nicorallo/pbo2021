<?php

require_once('vendor/autoload.php');
use App\MahasiswaBaru;

$budi = new MahasiswaBaru("H1101201035", "Budi", "2004-10-21", "Laki-Laki", 9118334);

$budi->tuntaskan();
?>