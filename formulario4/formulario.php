<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./procesar_formulario.php" method="post" enctype="multipart/form-data" class="formularioAjax">
        <label for="">Seleccionar Archivo</label>   
        <br> 
        <input type="file" name="fileInput" accept=".png">
        <br>
        <button type="submit">Enviar</button>
    </form>  
    <form action="./procesar_formulario.php" method="post" enctype="multipart/form-data" class="formularioAjax">
        <label for="">Seleccionar Archivo</label>   
        <br> 
        <input type="file" name="fileInput" accept=".png">
        <br>
        <button type="submit">Enviar</button>
    </form>     

 <!--    <span id="miSpan"></span>
    <input type="text" value="Hola" id="miInput"> -->

    <script src="ajax.js"></script>

</body>
</html>