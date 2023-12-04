<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aPacientes = array();

$aPacientes[] = array("dni" => "33.765.012",
                      "nombre" => "Ana Acuña",
                      "edad" => 45,
                      "peso" => 81.5,
);

$aPacientes[] = array("dni" => "23.684.385",
                      "nombre" => "Gonzalo Bustamante",
                      "edad" => 66,
                      "peso" => 79,
);

$aPacientes[] = array("dni" => "33.765.012",
                      "nombre" => "Juan Irraola",
                      "edad" => 28,
                      "peso" => 79,
);

$aPacientes[] = array("dni" => "33.765.012",
                      "nombre" => "Beatriz Campo",
                      "edad" => 50,
                      "peso" => 79,
);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Nutrición SA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <main class="container">

        <div class="row">
            <div class="col-12 pt-5">

                <h1>Lista de Pacientes</h1>

            </div>
        </div>

        <div class="row">
            <div class="col-12 pt-3">

                <table class="table table-hover border">

                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Peso</th>
                    </tr>

                    <?php

                        foreach($aPacientes as $paciente) { 
                            
                    ?>
                    
                    <tr>
                        <td><?php echo $paciente["dni"]; ?></td>
                        <td><?php echo $paciente["nombre"]; ?></td>
                        <td><?php echo $paciente["edad"]; ?></td>
                        <td><?php echo $paciente["peso"]; ?></td>
                    </tr>

                    <?php } ?>

                </table>

            </div>
        </div>

    </main>
    
</body>
</html>