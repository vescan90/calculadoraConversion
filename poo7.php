<?php
    class Animal {
        public $tipoSonido;

        public function __construct(){
            echo 'Ha nacido un animal';
        }

        public function correr(){
            echo 'YO corro';
        }

        public function  andar(){
            echo 'Yo camino';
        }

        public function getSonido(){
            echo $this->$tipoSonido;
        }
    }

    class Gato extends Animal {
        public function __construct(){
            parent::__construct();
            $tipoSonido = 'Miau';

            echo 'Es un gato y hace '.$tipoSonido;
        }
    }

    class Perro extends Animal {
        public function __construct(){
            parent::__construct();
            $tipoSonido = 'Guau';

            echo 'Es un perro y hace '.$tipoSonido;
        }
    }

    $objGato = new Gato();
    $objPerro = new Perro();

    if($objGato instanceof Gato){
        echo '- Es un gato y ';
        if($objGato instanceof Animal){
            echo 'es un gato y es un animal';
        }
    }elseif($objGato instanceof Perro){
        echo 'Es un perro y ';
        if($objGato instanceof Animal){
            echo 'es un animal ';
        }
    }