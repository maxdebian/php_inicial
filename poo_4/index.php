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
        
        /* $object = new Automovil('Amarillo','Fiat');
        $object->getAll(); */
        $object2 = new Camion('Gris',20);
        
        $object2->getAll();
    ?>
</body>
</html>