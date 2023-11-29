<?php

/*     if(){

    } */

/*     if():

    endif; */

    $precio = 2000;
    $decuentoPorcentual = 20;
    $porcentajeTotal=100;
    //$descuento = 0;
    //// 2000 ---- 100%
    //// resultado ---- 20%



    if($precio>=2000){
        
        /* if($porcentajeTotal>0){
            $descuento = ($decuentoPorcentual*$precio)/$porcentajeTotal;
        }else{
            $descuento = 0;
        } */
        
        
        if($porcentajeTotal>0) $descuento = ($decuentoPorcentual*$precio)/$porcentajeTotal;
        $resultado = $precio - $descuento;
        echo "Aplica descuento el precio es: $resultado el descuento del $descuento y el precio real es: $precio"; 



        // echo ($sexo=='m') ? "sexo masculino" : "sexo femenino"; 
        /* $descuento = ($porcentajeTotal>0) ? ($decuentoPorcentual*$precio)/$porcentajeTotal : 0;
        $resultado = $precio - $descuento;
        echo 'Aplica descuento el precio es: '.$resultado.' el descuento del '.$descuento .' y el precio real es: '.$precio; */

    }else{
        echo "No se aplica descuento";
    } 


   /*  if(false){
        echo "Esto esta caro";
    }else{
        echo "Nuestro resultado es false";
    } */