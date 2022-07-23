<?php 

    require 'operacion.php';
    require 'menu.php';

    //Aqui se realizaran las converciones de longitud

    class Longitud extends Operacion{

        private $opcion;

        //Menú:
        public function menu(){

            $opcion = readline('Digite 1 para convertir de cmm a mm: <br>
        Digite 2 para convertir de cm a m');

        switch ($opcion) {
            case 1:
                echo 'digitaste 1'
                break;
        
            default:
                echo 'nada';
                break;
    }
        }
        

    }

    