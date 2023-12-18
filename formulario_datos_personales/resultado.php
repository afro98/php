<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST){
    
    $nombre = $_POST["txtNombre"];
    $dni = $_POST["txtDni"];
    $telefono = $_POST["txtTelefono"];
    $edad = $_POST["txtEdad"];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <main class="container">

        <div class="row">
            <div class="col-12 text-center py-5">

                <h1>Resultado Formulario</h1>

            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <table class="table table-hover border">

                    <tr>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Teléfono</th>
                        <th>Edad</th>
                    </tr>

                    <tr>
                        <td><?php echo $nombre; ?></td>
                        <td><?php echo $dni; ?></td>
                        <td><?php echo $telefono; ?></td>
                        <td><?php echo $edad; ?></td>
                    </tr>

                </table>

                <div>
                    <a href="index.php" class="btn btn-secondary float-end">
                        Volver a formulario
                    </a>
                </div>

            </div>
        </div>

    </main>

</body>
</html>