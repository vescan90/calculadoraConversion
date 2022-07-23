<?php
    class Calculadora {

        public static function sumar($num1, $num2){
            $result = $num1 + $num2;
            return $result;
        }

        public static function restar($num1, $num2){
            $result = $num1 - $num2;
            return $result;
        }

        public static function multiplicar($num1, $num2){
            $result = $num1 * $num2;
            return $result;
        }

        public static function dividir($num1, $num2){
            $result = $num2 != 0 ? 'La división es: '.$result = $num1 / $num2 : 'No se puede dividir entre cero.';
            return $result;
        }
    }

    $n1 = 34;
    $n2= 3;

    echo 'la suma es: '.Calculadora::sumar($n1, $n2);
    echo '<br>';
    echo 'La resta es: '.Calculadora::restar($n1, $n2);
    echo '<br>';
    echo 'La multiplicacion es: '.Calculadora::multiplicar($n1, $n2);
    echo '<br>';
    echo Calculadora::dividir($n1, $n2);