<?php

date_default_timezone_set("America/Argentina/Buenos_Aires");

ini_set('display_errrors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nombre = "Elias Ochi";

$edad = 25;

$aPeliculas = ["Goodfellas", "The Shining", "Apocalypse Now"];



$aProductos = array();

$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000,
);

$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000,
);

$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter F/C 2900F",
    "marca" => "Surrey",
    "modelo" => "554AIQ1201E",
    "stock" => 5,
    "precio" => 45000,
);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <main class="container">

        <div class="row">
            <div class="col-12 text-center py-5">

                <h1>Ficha Personal</h1>

            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <table class="table table-hover border">

                    <tr>
                        <th>Fecha:</th>
                        <td><?php echo date("d/m/Y)"); ?></td>
                    </tr>

                    <tr>
                        <th>Nombre y apellido:</th>
                        <td><?php echo $nombre; ?></td>
                    </tr>

                    <tr>
                        <th>Edad:</th>
                        <td><?php echo $edad; ?></td>
                    </tr>

                    <tr>
                        <th>Peliculas Favoritas:</th>
                        <td>
                            <?php echo $aPeliculas[0]; ?> <br>
                            <?php echo $aPeliculas[1]; ?> <br>
                            <?php echo $aPeliculas[2]; ?>
                        </td>
                    </tr>

                </table>

            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center py-5">

                <h1>Listado de productos</h1>

            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <table class="table table-hover border">

                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Acción</th>
                    </tr>

                    <?php
                   
                    $contador = 0;
                    while ($contador < 3) { ?>
                    
                    <tr>
                        <td><?php echo $aProductos[$contador]["nombre"]; ?></td>
                        <td><?php echo $aProductos[$contador]["marca"]; ?></td>
                        <td><?php echo $aProductos[$contador]["modelo"]; ?></td>
                        <td><?php echo $aProductos[$contador]["stock"] == 0 ? "No hay stock" : ($aProductos[$contador]["stock"] > 10 ? "Hay stock" : "Poco stock"); ?></td>
                        <td><?php echo $aProductos[$contador]["precio"]; ?></td>
                        <td><button class="btn btn-primary">Comprar</button></td>
                    </tr>

                    <?php
                        $contador++;
                        } ?>   
                        
                </table>

            </div>
        </div>
        
    </main>
</body>

</html>