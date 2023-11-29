<?php

    /* $contadorTabla=1;

    do{
        echo 'contadorTabla: '.$contadorTabla.' <br>';
        $contadorTabla++;
    }while($contadorTabla<=0); */


    $tabla=7;
    $contadorTabla=1;
    $totalDeTabla = 30;

    echo('Tabla del '.$tabla.'<br>');
    do{
        echo $tabla.' * '.$contadorTabla.' = '.$tabla*$contadorTabla.' <br>';
        $contadorTabla++;
    }while($contadorTabla<=$totalDeTabla);
    