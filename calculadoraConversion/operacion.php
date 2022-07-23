<?php 

abstract class Operacion{

        private $valor, $operacion, $factorConversion, $resultado;


        public function mostrarResultado($resultado){
            $this->resultado = $resultado;
            echo $this->$resultado;
        }

        public function validacionValor($valor){
            $this->valor = $valor;

            if (!is_nan($valor)) {
                
                echo 'Digite el valor a convertir: ';

            }else {
                echo 'EL valor debe ser un número';
            }
        }
    }

    

$objOperacion = new Operacion();
$objOperacion->validacionValor('e');