<?php
    session_start();
    /* if(!isset($_SESSION['nombre'])) header('Location: session.php'); */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Su nombre es: <?php echo $_SESSION['nombre']; ?></h3>
    <form action="login.php" method="post">
        <label for="">Usuario</label>
        <input type="text" name="usuario">
        <br>
        <br>
        <button type="submit">Enviar Formulario</button>

    </form>
</body>
</html>