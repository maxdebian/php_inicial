<?php

    // primer elemento nuestro servidor si es local es localhost
    // 2do usuario de la base de datos
    // 3ro password de la base de datos
    // 4to nombre de la base de datos
    // 5to es el puerto de conexion
    $conexion = new mysqli('localhost','root','','talentos_digitales','3306');
    $conexion->set_charset('Utf-8');
