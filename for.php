<?php

    /* for($i=0;$i<=10;$i++){
        echo $i.'<br>';
    }

    for($j=10;$j>=0;$j--){
        echo $j.'<br>';
    } */


    $personas = array("Maximiliano","Lucia","Juan","Analia","Julio","Julia",3232,true,-25);
    /* echo count($personas).'<br>';
    var_dump($personas); */

    for ($i=0; $i < count($personas)  ; $i++) { 
        echo $personas[$i].'<br>';
    }