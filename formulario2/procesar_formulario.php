<?php

    $nombreInput = $_POST['nombreInput'];
    $cursosInput  = $_POST['cursosInput'];
    $miRadioButton  = $_POST['miRadioButton'];
    $miCheckboxButton  = $_POST['miCheckboxButton']; 
    //var_dump($cursosInput);

    echo "<br>  Nombre: $nombreInput";

    foreach ($cursosInput as $index => $curso) {
        echo "<br> indice: $index     Curso: $curso";
    }

    echo "Sexo: $miRadioButton";
    echo "Animal: $miCheckboxButton";