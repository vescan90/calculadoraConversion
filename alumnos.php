<?php

    //invocamos la clase a utilizar para heredar
    require 'personas.php';

    class Alumnos extends Persona{
        private $matricula;

        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function getMatricula(){
            return $this->matricula;
        }

        public function datosAlumno(){
            $this->imprimirNombre();
        }
    }

    