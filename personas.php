<?php

    class Persona{
        private $nombre;
        private $apellido;

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function imprimirNombre(){
            echo 'Mi nombre es '.$this->getNombre().' '.$this->getApellido();
        }
    }