<?php 

    $pais = 'Argentina';
    $pais2 = $pais;
    $pais3 = &$pais;
    
    echo '<br>pais     ------------->>>>  '.$pais;
    echo '<br>pais2     ------------->>>>  '.$pais2;
    echo '<br>pais3     ------------->>>>  '.$pais3;
    echo '<br><br><br><br><br>';

    $pais = 'Brazil';


    echo '<br>pais     ------------->>>>  '.$pais;
    echo '<br>pais2     ------------->>>>  '.$pais2;
    echo '<br>pais3     ------------->>>>  '.$pais3;
    
