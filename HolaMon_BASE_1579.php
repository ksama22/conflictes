<?php

class HolaMon
{
    private $a =' Hola Mundo';
    public function getHolaMon()
    {
        return $this->a;
    }
}


$bar = new HolaMon();

echo " {$bar->getHolaMon()}";

?>