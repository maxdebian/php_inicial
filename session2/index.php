<?php
    /* session_start(); */
    include ('login.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
    <!-- <h3>Su nombre es: <?php /* if(isset($_SESSION['nombre'])) echo $_SESSION['nombre']; */ ?></h3>
    <form action="" method="post">
        <label for="">Usuario</label>
        <input type="text" name="usuario" pattern="[a-zA-Z]{3,10}" maxlength="10">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" pattern="[a-zA-Z0-9$@.-]{4-30}" maxlength="30">
        <br>
        <button type="submit" name="btnSubmit" value="formSubmit">Enviar Formulario</button>

    </form> -->

    <div class="row">
        <div class="col-3 offset"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header text-center">Login</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3 offset"></div>
                        <div class="col-6">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="usuario" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" pattern="[a-z]{3,10}" name="usuario" id="usuario">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" pattern="[A-Z0-9]{4,30}" name="password" id="password">
                                </div>
                                <button type="submit" class="btn btn-primary" name="btnSubmit" value="formSubmit">Enviar Formulario</button>
                            </form>
                        </div>
                        <div class="col-3 offset"></div>
                    </div>
                

                    
                </div>
            </div>
        </div>
        <div class="col-3 offset"></div>
    </div>
    

   <!--  <div class="row">
        <div class="col-3 offset"></div>
        <div class="col-3">
            <h1>Nombre:</h1>
            <p>Apellido:</p>
        </div>
        <div class="col-3">
            <h1>Maximiliano</h1>
            <p>Tedesco</p>
        </div>
        <div class="col-3"> -->
            <!-- <div class="alert alert-danger" role="alert">
                A simple danger alert—check it out!
            </div> -->
         <!--    <span class="alert alert-danger">Error</span>
        </div>
    </div> -->
<!--     <div >
        <h1>Maximiliano</h1>
        <p>Tedesco</p>
    </div> -->

</body>
</html>