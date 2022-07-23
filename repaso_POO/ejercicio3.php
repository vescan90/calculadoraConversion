<?php


class Persona{
    private $nombre;
    private $edad;

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function getNombreEdad(){
        echo 'Edad: '.$this->edad.'<br>'.'Nombre: '.$this->nombre;
    }

    
}

class Empleado extends Persona{
    private $sueldo;

    public function setSueldo($sueldo){
        $this->sueldo = $sueldo;
    }

    public function getSueldo(){
        echo '<br>'.'Sueldo: '.$this->sueldo;
    }

    public function getNombreEdad(){
        echo 'Nombre: '.$this->nombre;
    }
}

$objPersona = new Persona();
$objPersona->setNombre('Sebastian');
$objPersona->setEdad(33);
$objPersona->getNombreEdad();

$objetoEmpleado = new Empleado();

$objetoEmpleado->setSueldo(500);
$objetoEmpleado->getSueldo();