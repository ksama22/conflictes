<?php

class HolaMon
{
<<<<<<< HEAD
    //Soy un conflicto
    private $a =' Hola Mundo';
=======
    private $a =' Hola Kevin';
>>>>>>> f10ee2b (resolucion conflictes)
    public function getHolaMon()
    {
        return $this->a;
    }
}


$bar = new HolaMon();

echo " {$bar->getHolaMon()}";

?>