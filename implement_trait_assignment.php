<?php

require_once('vendor/autoload.php');

use App\Cat;

$bung = new Cat();
$bung->name = 'Miko';

$bung->cekNama();
$bung->sound();
$bung->claw();
$bung->drink();