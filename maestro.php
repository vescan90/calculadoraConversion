<?php
    require 'personas.php';

    class Maestro extends Persona{
        private $materiaImparte;

        public function setMateria($materiaImparte){
            $this->matricula = $materiaImparte;
        }

        public function getMateria(){
            return $this->materiaImparte;
        }
    }