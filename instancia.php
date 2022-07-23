<?php
    require 'alumnos.php';
    require 'maestro.php';

    $objAlumno = new Alumnos();
    
    $objAlumno->setNombre('Julia');
    $objAlumno->setApellido('Cruz');
    $objAlumno->imprimirNombre();
    echo '<br>';
    $objAlumno->setMatricula('EL código de matricula es: yxs345');
    echo $objAlumno->getMatricula();


    $objMaestro = new Maestro();

    $objMaestro->setMateria('PROGRAMACIÓN');
    $objMaestro->getMateria();




