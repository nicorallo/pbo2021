<?php

namespace App;

class EsJeruk implements Minuman
{
    public function buat()
    {
        echo "Masukkan dulu ke blender";
    }

    public function minum()
    {
        echo "nah Minumlah";
    }
    
    public static function diLihat()
    {
        echo "Cuman boleh dilihat saja, tidak boleh diminum kan puasa, ntar batal.<br/><br/>";
    }
}