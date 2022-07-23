<?php

    class MiCalcuradora{
        private $n1, $n2;

        public function __construct($num1, $num2){
            $this->n1 = $num1;
            $this->n2 = $num2;
        }

        public function sumar(){
            $result = $this->n1 + $this->n2;
            
            return $result;
        }

        public function restar(){
            return $result = $this->n1 - $this->n2;
        }

        public function multiplicar(){
            $result = $this->n1 * $this->n2;

            return $result;
        }

        public function dividir(){
            $result = $this->n2 != 0 ? 'La división es: '.$result = $this->n1 / $this->n2: 'No se puede dividir entre cero...';

            return $result;
        }
    }

    //INSTANCIA
    $var1 = 10;
    $var2 = 10;
    $objCalculadora = new MiCalcuradora($var1, $var2);

    echo 'La suma es: '.$objCalculadora->sumar();
    echo '<br>';
    echo 'La resta es: '.$objCalculadora->restar();
    echo '<br>';
    echo 'La multiplicación es: '.$objCalculadora->multiplicar();
    echo '<br>';
    echo $objCalculadora->dividir();