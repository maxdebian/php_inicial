<?php
    
    $tabla=7;
    $contadorTabla=1;
    $totalDeTabla = 30;
    
    
    /* while($contadorTabla<=10){

        echo 'contadorTabla: '.$contadorTabla.' <br>';
        $contadorTabla++;


    } */
    echo('Tabla del '.$tabla.'<br>');
    while($contadorTabla<=$totalDeTabla){

        /* $contadorTabla * 1 = x
        $contadorTabla * 2 = x2 */
        echo $tabla.' * '.$contadorTabla.' = '.$tabla*$contadorTabla.' <br>';
        $contadorTabla++;


    }