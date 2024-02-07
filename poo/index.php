<?php 
    include_once('Coche.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Creando Objetos</p>

    <?php
        $miCocheObjeto = new Coche(null,4,'Audi');
        //echo "Mi color de auto es: ".$miCocheObjeto->color;
        /* $miCocheObjeto->marca = 'Audi'; */
        /* $miCocheObjeto->potencia = 4; */

        /* echo $miCocheObjeto->setPotencia(4); */



        echo "Mi color de auto es: ".$miCocheObjeto->getColor();

        $miOtroCocheObjeto = new Coche('Azul y Amarillo',8,'Ferrari');
        //$miOtroCocheObjeto->color = "Azul y Amarillo";
/*         $miOtroCocheObjeto->setColor("Azul y Amarillo");
        $miOtroCocheObjeto->marca = 'Ferrari'; */
        /* $miOtroCocheObjeto->potencia = 8; */

/*         echo $miOtroCocheObjeto->setPotencia("Hola"); */

        echo "<br>Mi color de auto es: ".$miOtroCocheObjeto->getColor();
        echo('<br><br><br><br><br>');
        /* 
            MALAS PRACTICAS
        if($miCocheObjeto->potencia >= $miOtroCocheObjeto->potencia){
            echo $miCocheObjeto->marca.' Es mayor o igual a '.$miOtroCocheObjeto->marca;
        }else{
            echo $miOtroCocheObjeto->marca.' Es mayor o igual a '.$miCocheObjeto->marca;
        } 
        
        */
        echo $miCocheObjeto->controlarPotencia($miOtroCocheObjeto);



    ?>


</body>
</html>