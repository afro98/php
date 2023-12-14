<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST){

    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

    if($usuario != "" && $clave != ""){

        header("Location: acceso-confirmado.php");

    } else {

        $error = 'Solo valido para usuarios registrados';

    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <main class="container">

        <div class="row">
            <div class="col-6 py-5">
                
                <h1>Formulario</h1>

                <div class="row">
                    <div class="col-12">
                        <?php if(isset($error)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <form action="" method="POST">

                    <div class="pb-3">
                        <label for="txtUsuario" class="pb-2">Usuario:</label>
                        <input type="text" name="txtUsuario" id="txtUsuario" class="form-control">
                    </div>

                    <div class="pb-3">
                        <label for="txtClave" class="pb-2">Clave:</label>
                        <input type="password" name="txtClave" id="txtClave" class="form-control">
                    </div>

                    <div class="pt-2"><button type="submit" name="btn-ingresar" class="btn btn-primary">INGRESAR</button></div>

                </form>

            </div>
        </div>
    </main>
</body>
</html>