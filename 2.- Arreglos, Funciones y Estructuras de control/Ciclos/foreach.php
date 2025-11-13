<?php


$tienda_cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Recalentado" => 10,
    "Capuccino" => 27.5,
    "Mocca" => 24
);

foreach ($tienda_cafes as $cafe => $price) {
    echo "El cafe $cafe cuesta $$price USD \n";
}

foreach ($tienda_cafes as $cafe => $precio) {

    if ($cafe == "Recalentado") {
        continue;
    }
    echo "El cafe $cafe es muy rico!! \n";
}