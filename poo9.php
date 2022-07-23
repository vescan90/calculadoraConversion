<?php

    class MethodTest{
        public function __call($nombre, $argumentos){
            echo 'Llamando al método de objeto '.$nombre,implode(',', $argumentos). '<br>';
        }

        public static function __callStatic($name, $arguments){
            echo 'Llamando al método estatico '.$name,implode(',', $arguments).'<br>';
        }
    }

    $objDinamico = new MethodTest();
    $objDinamico->runTest('en contexto de objeto');

    MethodTest::runTest('en contexto estático');