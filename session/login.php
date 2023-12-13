<?php

    if($_POST['usuario']==='maxi'){
        session_start();
        $_SESSION['nombre'] = 'Maximiliano';
        $_SESSION['apellido'] = 'Tedesco';
        /* header('Location: session.php'); */
        if(headers_sent()){
            echo "<script> window.location.href = 'session.php'; </script>";
        }else{
            header('Location: session.php');
        }
    }else{
        echo 'datos incorrectos';
        exit();
    }