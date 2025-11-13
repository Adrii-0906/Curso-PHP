<?php

$edades = [18, 22, 40, 34];

// Funcion count, contar los elementos del array

echo count($edades) . "\n";

// Funcion array_push
array_push($edades, 13) . "\n";

var_dump($edades);

// is_array, comprueba si la variable es una array, devuelve un booleano

$esto_no_es_un_array = "";

var_dump(is_array($edades));

// Funcion explode, sirve para crear array

$lista_frutas = "fresa,cereza,manzana";
$lista_frutas_array = explode(",", $lista_frutas);

var_dump($lista_frutas_array);

// Funcion implode, sirve para
$lista_frutas_array2 = ["fresa", "cereza", "manzana"];
$lista_frutas2 = implode(",", $lista_frutas_array2);

var_dump($lista_frutas2);