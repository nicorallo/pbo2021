<?php
namespace App;

class Kopi implements Minuman
{
    public function buat()
    {
        echo "Masak air panas, ";
        echo "masukkan kopi ke dalam gelas dan tuangkan air panas, ";
        echo "aduk kopi. ";
        echo "Diamkan sejenak, ";
        echo "tambahkan gula pasir.<br/>";
    }

    public function minum()
    {
        echo "Minum dengan cara diseruput sedikit demi sedikit.<br/><br/>";
    }

    public function tambahSusu()
    {
        echo "Tambahkan susu kedalam kopi.<br/>";
    }
}