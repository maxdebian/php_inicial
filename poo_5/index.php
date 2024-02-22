<?php
    include_once('Auto.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="section container">
        <div class="row card-panel red-text">
            <h3 align="center">Registros para una base de datos de Automoviles</h3>
        </div>
        <?php
            $auto = new Auto('Negro','2020','Audi');
            $pdoConection = new PdoConection("localhost","root","","mysql","talentos_digitales");
            $pdoConection->connect();
            
            // Creamos la base de datos
            //$pdoConection->createDatabase();

            //Creamos la tabla
            //$pdoConection->createTable();
            
            echo('<br>');
            // Insertamos registro
            //$pdoConection->insert($auto);
            //echo('<br>');
                 
            // obtenemos el ultimo ID insertado
            //echo $pdoConection->getLastID();


            $pdoConection->delete(4); 
            //$pdoConection->delete(4);

            // check that  "Mostramos los resultados de nuestra tabla previamente debemos tener al menos 1 registro"
            $pdoConection->selectAll();

            //Actualizamos nuestro registro con el ID que pasamos por parametros
            //$auto->setId(1);
            //$pdoConection->update($auto); 

      
            
           
            
            echo('<br>');
        ?>
    </div>
</body>
</html>