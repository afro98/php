<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();

$aProductos[] = array("nombre" => "Monitor LG 24\" UHD",
                      "marca" => "LG",
                      "modelo" => "F434FXC",
                      "stock" => 30,
                      "precio" =>267499,
);

$aProductos[] = array("nombre" => "Auriculares Logitech JK100",
                      "marca" => "Logitech",
                      "modelo" => "F434FXC",
                      "stock" => 3,
                      "precio" =>70999,
);

$aProductos[] = array("nombre" => "Teclado + Mouse RGB",
                      "marca" => "Redragon",
                      "modelo" => "F434FXC",
                      "stock" => 0,
                      "precio" =>49999,
);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
    <main class="container">

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

                    <tr>

                        <?php

                            for($contador = 0; $contador <count($aProductos); $contador++) { ?>
                        
                        <td><?php echo $aProductos[$contador]["nombre"]; ?></td>
                        <td><?php echo $aProductos[$contador]["marca"]; ?></td>
                        <td><?php echo $aProductos[$contador]["modelo"]; ?></td>
                        <td><?php echo $aProductos[$contador]["stock"] == 0? "No hay stock" : ($aProductos[$contador]["stock"] > 10? "Hay stock" : "Poco stock"); ?></td>
                        <td><?php echo $aProductos[$contador]["precio"]; ?></td>
                        <td><button class="btn btn-primary">Comprar</button></td>

                    </tr>
                    
                    <?php
                        }
                    ?>

                </table>

            </div>
        </div>
        
    </main>
</body>
</html>