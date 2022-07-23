<?php

    class Arreglo_sort{
        protected $miArreglo;

        public function __construct(array $arreglo){
            $this->miArreglo = $arreglo;
        }

        public function ordenando(){
            $orden = $this->miArreglo;
            sort($orden);

            return $orden;

        }
    }

    $objArreglo = new Arreglo_sort(array(-12, 34, 0, -234, 23, 18));
    print_r($objArreglo->ordenando());