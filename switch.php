<?php
    $sexo = 'I';
    $edad = 60;

    switch ($sexo) {
        case 'm':
            echo "su sexo es ";
            echo "masculino";
            break;
        case 'f':
            echo "su sexo es ";
            echo "femenino";
            break;
        case 'i':
            echo "su sexo es ";
            echo "indefinido";
            break;
        
        default:
            echo "su sexo es ";
            echo "NO LO SE";
            break;
    }