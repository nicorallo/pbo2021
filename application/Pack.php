<?php

namespace App;

/**
 * Trait to inherit another traits
 */
trait Pack
{
    use HaveSound, CanClaw, Drinking, HasName{
    drink as public;
    }
    public function claw()
    {
        echo $this->name." juga dapat memanjat<br>";
    }
}