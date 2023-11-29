<?php

    /* $personas = array("Maximiliano","Lucia","Juan","Analia","Julio","Julia",3232,true,-25);

    foreach ($personas as $indice => $persona) {
        echo $persona.' en la posicion: '.$indice.'<br>';
    } */

    /* $productos = [
        [
            "codigo"=>"A001",
            "descripcion"=>"Yerba"
        ],
        [
            "codigo"=>"A002",
            "descripcion"=>"Azucar"
        ],
        [
            "codigo"=>"A003",
            "descripcion"=>"Termo"
        ]
    ]; */
    /* var_dump($productos); */

    //foreach ($productos as $key => $producto) {
        /* exit($producto["codigo"]); */
        /* var_dump($producto);  */
       /*  echo "<br> -> $key = > ".$producto["codigo"]; */

    //}
    
    /* $productos=[
        "miDescripcionIndice"=>"Yerba",
    ];

    foreach ($productos as $key => $producto) {
        echo "<br> ->           $key                = > ".$producto;
    } */

    /* echo "Finalizo"; */


    $productos = [
        [
            "codigo"=>"A001",
            "descripcion"=>"Yerba"
        ],
        [
            "codigo"=>"A002",
            "descripcion"=>"Azucar"
        ],
        [
            "codigo"=>"A003",
            "descripcion"=>"Termo"
        ]
    ];

    foreach ($productos as $key => $producto) {
        if($producto["codigo"]=="A002") break;
       echo "<br> -> $key = > ".$producto["codigo"]; 
    }

    foreach ($productos as $key => $producto) {
        if($producto["codigo"]=="A002") continue;
       echo "<br> -> $key = > ".$producto["codigo"]; 
    }