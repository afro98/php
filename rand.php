<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$valor = rand(1,5);


if($valor == 1 || $valor == 3 || $valor == 5){
    echo "$valor es impar";
} else {
    "$valor es par";
}




if($valor % 2 == 0){ //Analiza el resto de dividir por 2, todo número divisible por 2 es par
    echo "$valor es par";
} else {
    echo "$valor es impar";
}

?>