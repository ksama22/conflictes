<?php

class HolaMon
{
    private $a =' Hola Kevin';
    public function getHolaMon()
    {
        return $this->a;
    }
}


$bar = new HolaMon();

echo " {$bar->getHolaMon()}";

?>