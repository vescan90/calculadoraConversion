<?php

    class Persona{
    public $nombre, $apellido;

    public function __construct($name, $lastName){
        $this->nombre = $name;
        $this->apellido = $lastName;
    }

    public function __toString(){

        return $this->nombre." ".$this->apellido;
    }
}

$objPersona = new Persona('Sebastian', 'Vescance');
echo $objPersona;
$objPersona2 = new Persona(' Elvira', 'Valencia');
echo $objPersona2;