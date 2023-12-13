<?php
   /*  echo $_FILES['fileInput']['name'].'<br>';
    echo $_FILES['fileInput']['tmp_name'].'<br>';
    echo $_FILES['fileInput']['type'].'<br>';
    echo $_FILES['fileInput']['error'].'<br>';
    echo $_FILES['fileInput']['size'].'<br>'; */

    //2 MB 2 * 1024 

  /*   if(($_FILES['fileInput']['size']/1024)>2048){
        echo "Archivo erroneo";
        exit();
    } */

    /* if(mime_content_type($_FILES['fileInput']['tmp_name']) != 'image/jpeg' 
        && mime_content_type($_FILES['fileInput']['tmp_name']) != 'image/jpg'){
        
        echo "Tipo de archivo no soportado";
        exit();
    }  */


  /*   if(mime_content_type($_FILES['fileInput']['tmp_name']) == 'image/tiff' || mime_content_type($_FILES['fileInput']['tmp_name']) == 'image/x-cmu-raster'){
        echo "Tipo de archivo no soportado";
        exit();
    } */

    /* if(is_null($nombre)){
        echo "el nombre es nulo";
    }else{
        echo "continuar ejecucion";
    }
    if(!is_null($nombre)){
        echo "continuar ejecucion";
    }
    echo "el nombre es nulo"; */





    /* 
    Funciona

    if(mime_content_type($_FILES['fileInput']['tmp_name']) != 'image/jpeg' 
    && mime_content_type($_FILES['fileInput']['tmp_name']) != 'image/jpg'){
    
    echo "Tipo de archivo no soportado";
    exit();
    }  */

    if(!file_exists('files')){
/*         echo "No existe carpeta files";
        exit(); */
        if(!mkdir('files',0777)){
            echo "error no puedo crear esa carpeta";
            exit();
        }
    }

    chmod('files',0777);

    if(move_uploaded_file($_FILES['fileInput']['tmp_name'],'files/'.$_FILES['fileInput']['name'])){
        echo "Archivo subido exitosamente";
    }else{
        echo "Error al subir el archivo";
    }

    //echo "Procesar archivo";