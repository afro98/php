<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


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
            <div class="col-12 text-center py-5">

                <h1>Formulario de datos personales</h1>

            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <form action="resultado.php" method="POST">

                    <div class="pb-3">
                        <label for="txtNombre">Nombre:*</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                    </div>

                    <div class="pb-3">
                        <label for="txtNombre">DNI:*</label>
                        <input type="text" name="txtDni" id="txtDni" class="form-control">
                    </div>

                    <div class="pb-3">
                        <label for="txtNombre">Teléfono:*</label>
                        <input type="number" name="txtTelefono" id="txtTelefono" class="form-control">
                    </div>

                    <div class="pb-3">
                        <label for="txtNombre">Edad:*</label>
                        <input type="text" name="txtEdad" id="txtEdad" class="form-control">
                    </div>

                    <div class="pt-3">
                        <button type="submit" class="btn btn-primary float-end">
                            ENVIAR
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </main>

</body>
</html>