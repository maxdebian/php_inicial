<?php 

    // + - / * 
    // jerarquia 
    /* 
        1 () se ejecuta primero
        2 ** despues de ()
        3 *,/
        4 +,-
        5 %
    */
    //$resultado = 2-3+5;
    /* 2-3 = -1 + 5 = 4
    -3+5 = 2+2 = 4 */


    //$resultado = (2-3)+5;
    /* 2-3 = -1 + 5 = 4    */

    //echo "Resultado: $resultado";

    //$numero1 = 2;
    //$numero2 = 5;
    //$resultado = ($numero1 + $numero2) / 10;
    //echo $numero1 + $numero2;
    //echo $resultado;

    /* $numero1 = 10;
    $numero2 = 5;
    echo 'resto de la division '.$numero1 % $numero2;     */

    /**
     * Operadores de asignacion
     */

    $numero = 10;

    echo $numero;

    echo "<br>";

    $numero += 20;  // $numero = $numero + 20;
    
    echo $numero;

    $numero -= 10; // $numero = $numero -10
    
    echo "<br>";
    echo $numero;

    $numero *= 10; // $numero = $numero * 10

    echo "<br>";
    echo $numero;
    
    $numero /= 2; // $numero = $numero / 2

    echo "<br>--->";
    echo $numero;

    $numero .= '1'; // $numero = $numero.'Texto' 1001

    echo "<br>";
    echo $numero;

    $numero +=5;

    echo "<br>";
    echo $numero;  // 1006
