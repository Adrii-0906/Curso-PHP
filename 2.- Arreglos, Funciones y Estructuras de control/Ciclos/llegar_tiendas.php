<?php

$tiendas = 0;
$caminos = 1;



do{
    echo "Partimos de la tienda numero1";

    $llegar_tienda = readline("Dime la tienda a la que quieres ir: ");

} while ($llegar_tienda < 2);

for ($i=2; $i <= $llegar_tienda; $i++) {
    $temporal = $caminos;
    $caminos += $tiendas;
    $tiendas = $temporal;
}

echo "Dispones de $caminos caminos";
