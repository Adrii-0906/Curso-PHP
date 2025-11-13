<?php

// Operador de asignacion
$edad_juanito = ($edad_pepito = 18) + 5;

echo "La edad de pepito es $edad_pepito \n";
echo "La edad de juanito es $edad_juanito \n";

// Operadores de incremento

$contador = 1;

// $contador = $contador + 1;
//$contador += 1;
$contador++;

echo $contador . " \n";

// Otros operadores
/*
 * +=
 * -=
 * *=
 * /=
 */

$nombre = "Adrii";
$nombre .= " " . "Rana";
echo $nombre. "\n";

$contador = 1;
$resultado = ++$contador;
echo $resultado;