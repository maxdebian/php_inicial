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
        
    $object = new Ventas();
    $object->getMarca();
    echo "<br><br>";
    $object->getModelo();
    $cars = ['Audi','Renault','Fiat'];
    $object->getAll($cars);

    ?>
</body>
</html>