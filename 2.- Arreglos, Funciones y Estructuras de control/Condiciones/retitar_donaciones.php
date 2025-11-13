<?php

$donaciones_recibidas = readline("Dime el dinero total de tus donaciones: ");

if ($donaciones_recibidas >= 100) {
    echo "Valee, puedes retirar el dinero";
} else {
    echo "Todavia, no puedes retirar el dinero";
    echo "El dinero minimo para retirar el dinero es de 100 euros";
}
