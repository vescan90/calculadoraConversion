<?php
    class Frio{
        public function hacerCafe($tipo = 'Capuchino'){
            return '<h2>Hacer una taza de: </h2>'.$tipo.'<br>';
        }
    }

    $objFrio = new Frio();

    echo $objFrio->hacerCafe();