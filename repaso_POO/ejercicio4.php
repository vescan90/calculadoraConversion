<?php 

    class CabeceraPagina{

        private $titulo, $color, $fuente, $datoTitulo;

        public function setFeatures($titulo, $color, $fuente){
            $this->titulo = $titulo;
            $this->color = $color;
            $this->fuente = $fuente;
        } 

        public function comoDeseaTitulo($datoTitulo){
            $this->datoTitulo = $datoTitulo;
        }

        public function imprimirPropiedades(){
            echo 'Titulo: '.$this->titulo;
            echo '<br>'.'Color: '.$this->color;
            echo '<br>'.'Fuente: '.$this->fuente;
            echo '<br>'.'Deseo el título: '.$this->datoTitulo;
            
        }
    }

    $objeto = new CabeceraPagina();
    $objeto->setFeatures('Programación orientado a objetos ', 'negro ', 'Roboto ');
    $objeto->comoDeseaTitulo(' Centrado');
    $objeto->imprimirPropiedades();
