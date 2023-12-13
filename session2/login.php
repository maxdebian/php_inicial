<?php
    session_start();
    include('./conexion.php');

    if(!empty($_POST['btnSubmit'])){
        if(/* preg_match("/^[a-z]{3,10}$/",$_POST['usuario']) && preg_match("/^[A-Z0-9]{4-30}$/",$_POST['password']) */true){
            $user = $_POST['usuario'];
            $password = $_POST['password'];
            $sql = $conexion->query(" Select * from usuarios where username='$user' and password='$password' ");
            if($datos = $sql->fetch_object()){
                $_SESSION['user']= $datos->nombre;
                echo "<script> window.location.href='dashboard.php' </script>";
            }else{
                echo "<p class='alert alert-danger text-center'r>El usuario o contraseña no existe</p>";    
            }

        }else{
            echo "<p class='alert alert-danger text-center'r>No coinciden los patrones</p>";
        }
    }