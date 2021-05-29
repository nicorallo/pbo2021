<?php
// Tugas Praktikum 12
namespace App;

class Cat  
{
    use Pack;

    public function cekNama()
    {
        echo "Nama kucing ini adalah ".$this->name."<br>";
    }
    public function drink()
    {
        echo "Saat ini ".$this->name." sedang minum<br>";
    }
}