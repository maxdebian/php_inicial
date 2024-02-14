<?php 
    include_once('Automovil.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Clase 2 de POO</p>
    <?php
        
    echo Automovil::NUMERACION;   
    Automovil::calculo(10,10);
    
    $objectNew = new Automovil();
   /*  echo $objectNew::NUMERACION; */
        
        
        
        
        
        
        
/*         $autoObjeto = new Automovil();
        $autoObjeto->color = 'Azul';
        //$autoObjeto->marca = 'Fiat';  
        $autoObjeto->setMarca('Audi');
        //$autoObjeto->mostrarColorMarca(// 'Fiat');
        $camion = new Camion();
        $camion->color = 'Amarillo';
        $camion->setMarca('Ferrari');
        $camion->setCantidadDeRuedas(18);
        //$camion->mostrarCamion();
        //$camion->mostrarObjeto($camion);
        
        $moto = new Moto();
        $moto->color = 'gris';
        $moto->setMarca('Honda Biz');
        $moto->setCantidadDeRuedas(2);
        //$moto->mostrarMoto(); 
        $autoObjeto->getContent($camion); */

    ?>
</body>
</html>