<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array();

$aEmpleados[] = array("dni" => "33300123",
                      "nombre" => "David García",
                      "bruto" => 85000.30,
);

$aEmpleados[] = array("dni" => "40874456",
                      "nombre" => "Ana del Valle",
                      "bruto" => 90000,
);

$aEmpleados[] = array("dni" => "67567565",
                      "nombre" => "Andrés Perez",
                      "bruto" => 100000,
);

$aEmpleados[] = array("dni" => "75744545",
                      "nombre" => "Victoria Luz",
                      "bruto" => 70000,
);

function calcularNeto($bruto){

    return $bruto - ($bruto * 0.17);

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <main class="container">

        <div class="row">
            <div class="col-12 text-center py-5">

                <h1>Listado de Empleados</h1>

            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <table class="table table-hover border">

                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Sueldo</th>
                    </tr>

                    <?php

                        foreach ($aEmpleados as $empleados){
                           
                    ?>

                        <tr>
                            <td><?php echo $empleados["dni"]; ?></td>
                            <td><?php echo mb_strtoupper($empleados["nombre"]); ?></td>
                            <td>$<?php echo number_format(calcularNeto($empleados["bruto"]), 2, ",", "."); ?></td>
                        </tr>
                    <?php
                        }
                    ?>
                </table>

            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <p>Cantidad de empleados activos: <?php echo count($aEmpleados); ?> </p>

            </div>
        </div>

    </main>

</body>
</html>