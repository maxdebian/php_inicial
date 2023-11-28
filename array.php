<?php
    // Array escalares

   /*  $personas = array("Maximiliano","Lucia","Juan","Analia"); */

    //echo $personas[2];

    /* var_dump($personas); */
   /*  echo('<pre>');
    print_r($personas);
    echo('</pre>'); */
/*
    echo('<br><br>');
    $personas[1] = "Maria";
    
    echo('<pre>');
    print_r($personas);
    echo('</pre>'); */


   /*  $personas = ["Maximiliano",12.58,false,"Analia"];
    echo('<pre>');
    print_r($personas);
    echo('</pre>');

    var_dump($personas); */


    // Array asociativos
    /* $libros = [
        'nombre'    =>  'libro 1',
        'editorial' =>  'editorial 1',
        'anio'      =>  '2023'
    ];
    echo('<pre>');
    print_r($libros);
    echo('</pre>');

    $libros['editorial'] = 'Editorial 2';

    echo('<pre>');
    print_r($libros);
    echo('</pre>'); */

/*     $personas = [
        'nombre'    => "Maximiliano",
        'apellido'  => "Tedesco",
        'cursos'    => ['PHP','LARAVEL','VUEJS']
    ];

    echo('<pre>');
    print_r($personas);
    echo('</pre>');

    $personas['cursos'][2] = 'JAVASCRIPT';

    echo('<pre>');
    print_r($personas);
    echo('</pre>'); */


    $personas = array("Maximiliano","Lucia","Juan","Analia");

    echo '<pre>';
    print_r($personas);
    echo '</pre>';

    $cantidad = count($personas);
    echo 'Cantidad de elementos: '.$cantidad;

    sort($personas);

    echo '<pre>';
    print_r($personas);
    echo '</pre>';

    rsort($personas);

    echo '<pre>';
    print_r($personas);
    echo '</pre>';






    