<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aNotas = array(8, 4, 5, 3, 9, 1);


function promediar($aNumeros){

    $sumatoria = 0;

    foreach ($aNumeros as $numero){
        $sumatoria += $numero;
    }

    return $sumatoria / count($aNumeros);

}

echo "El promedio de notas es: " . promediar($aNotas) . "<br>";

?>