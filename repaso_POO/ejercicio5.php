<?php


    class Persona{
        protected $nombre, $edad;

        public function setNombreEdad($nombre, $edad){
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        public function getNombreEdad(){
            echo 'Nombre: '.$this->nombre.'<br>';
            echo 'Edad: '.$this->edad;

        }
    }

    class Empleado extends Persona{
        private $sueldo;

         public function setSueldo($sueldo){
             $this->sueldo = $sueldo;
         }

         public function getSueldo(){
             echo 'Sueldo: '.$this->sueldo;
         }
    }

    $objEmpleado = new Empleado();
    $objEmpleado->setNombreEdad('Sebastian', 40);
    $objEmpleado->getNombreEdad();