<?php

    class Mensaje{

        public $mensaje = 'Hola Mundo! ';
        
        public function miNombre($nombre) //Lo de los parentesis es un parametro
        {
            // Por medio del this accedemos a las variables de afuera del scope de la función
            return $this->mensaje.$nombre;
        }
    }

    //INSTANCIA
    $objMensaje = new Mensaje();
    echo $objMensaje->miNombre('Sebas!');