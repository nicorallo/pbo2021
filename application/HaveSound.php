<?php

namespace App;

/**
 * Trait untuk kamuflase
 */
trait HaveSound
{
    public function sound()
    {
        echo "Sebagai kucing, ".$this->name." sudah ";
        echo "pasti bunyi nya meong<br>";
    }
}