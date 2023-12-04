<?php

/*     $clave='Hola';

    // md5 
    echo md5($clave).'<br>';

    // sha1
    echo sha1($clave).'<br>';

    echo '<br><br>'; */
    // hash 
    /* foreach (hash_algos() as $key => $algoritmosDeEncriptacion) {
        echo $algoritmosDeEncriptacion.' - '.hash($algoritmosDeEncriptacion,$clave)."<br>";
    } 
 */
//    echo '<br><br>';
    // password_hash

/*     echo password_hash($clave,PASSWORD_DEFAULT);
    echo '<br><br>';
    echo password_hash($clave,PASSWORD_BCRYPT);
    echo '<br><br>';
    echo password_hash($clave,PASSWORD_BCRYPT,['cost'=> 10]); */

    $clave = 'Abc123';

    $clave_hash = password_hash($clave,PASSWORD_BCRYPT,['cost'=> 10]);

    $clave2= 'Abc1323sdas23';

    if(password_verify($clave2,$clave_hash)){
        echo 'La clave es correcta';
    }else{
        echo 'La clave no es correcta';
    }
