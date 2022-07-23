<?php

    abstract class Persona{
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
    }

    $objeto = new Empleado();
    $objeto->setNombre('Sebastian');
    $objeto->setEdad(32);
    $objeto->getNombreEdad();
    $objeto->setSueldo(500);
    $objeto->getSueldo();
