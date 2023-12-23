<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$iva = 0;
$precioSinIva = 0;
$precioConIva = 0;
$ivaCantidad = 0;

if ($_POST) {

    $iva = $_POST["lstIva"];
    $precioSinIva = $_POST["txtSinIva"];
    $precioConIva = $_POST["txtConIva"];

    if(($precioConIva == "" && $precioSinIva == "") || ($precioConIva != "" && $precioSinIva != "")){

        $precioConIva = 0;
        $precioSinIva = 0;
    }

    if ($precioSinIva != "" && $precioConIva == ""){

        $precioConIva = $precioSinIva * ($iva/100+1);
        $ivaCantidad = $precioConIva - $precioSinIva;

    }

    if($precioConIva != "" && $precioSinIva == ""){

        $precioSinIva = $precioConIva / ($iva/100+1);
        $ivaCantidad = $precioConIva - $precioSinIva;

    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IVA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <main class="container">

        <div class="row">
            <div class="col-12 text-center py-5">

                <h1>Calcular IVA</h1>

            </div>
        </div>

        <div class="row">
            <div class="col-3 offset-2">
                <form action="" method="POST">

                    <div class="pb-4">
                        <label for="">IVA</label>
                        <select name="lstIva" id="lstIva" class="form-control" required>
                            <option disabled selected></option>
                            <option value="10.5">10.5</option>
                            <option value="19">19</option>
                            <option value="21">21</option>
                            <option value="27">27</option>
                        </select>
                    </div>

                    <div class="pb-4">
                        <label for="txtSinIva">Precio sin IVA:</label>
                        <input type="text" name="txtSinIva" id="txtSinIva" class="form-control">
                    </div>

                    <div class="pb-4">
                        <label for="txtConIva">Precio con IVA:</label>
                        <input type="text" name="txtConIva" id="txtConIva" class="form-control">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">CALCULAR</button>
                    </div>

                </form>
            </div>

            <div class="col-5 pt-4">

                <table class="table table-hover border">

                    <tr>
                        <th>IVA:</th>
                        <td><?php echo $iva; ?>%</td>
                    </tr>

                    <tr>
                        <th>Precio sin IVA:</th>
                        <td><?php echo number_format($precioSinIva, 2, ",", "."); ?></td>
                    </tr>

                    <tr>
                        <th>Precio con IVA:</th>
                        <td><?php echo number_format($precioConIva, 2, ",", "."); ?></td>
                    </tr>

                    <tr>
                        <th>IVA Cantidad:</th>
                        <td><?php echo number_format($ivaCantidad, 2, ",", "."); ?></td>
                    </tr>

                </table>

            </div>
        </div>

    </main>
</body>

</html>