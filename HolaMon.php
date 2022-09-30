<?php

class HolaMon
{
    //Soy un conflicto
    private $a =' Hola Mundo';
    public function getHolaMon()
    {
        return $this->a;
    }
}


$bar = new HolaMon();
// dos
echo " {$bar->getHolaMon()}";

?>