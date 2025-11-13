<?php

// Sentencia if-else
$asientos_disponibles = 0;
$es_hijo_de_tom_holland = false;
$conoce_a_tony_stark = true;

if ($asientos_disponibles > 0) {
    echo "Puedes ver la pelicula de SpiderMan";
} else if ($es_hijo_de_tom_holland == true) {
    echo "No te creo, pero puedes ver la pelicula";
} else if ($conoce_a_tony_stark == true) {
    echo "No te creo, bueno, puedes pasar";
} else {
    echo "Lo sentimos, no hay asientos disponibles";
}