<?php

class HolaMon
{
    //Soy un conflicto dos
    private $a =' Hola Mundo';
    public function getHolaMon()
    {
        return $this->a;
    }
}

//Mas conflictos
$bar = new HolaMon();

echo " {$bar->getHolaMon()} pepe";

?>
