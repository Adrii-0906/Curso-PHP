<?php

$escula_michis = array(
    array(
        "Nombre" => "Missi",
        "Ocupacion" => "Dormir",
        "Color" => "Naranja",
        "Comidas" => array(
            "Comida favorita" => "Pate Salmon",
            "Comida no deseada" => "Pienso de perro"
        ),
    ),
    array(
        "Nombre" => "Ron",
        "Ocupacion" => "Jugar",
        "Color" => "Blanco",
        "Comidas" => array(
            "Comida favorita" => "Pate pavo",
            "Comida no deseada" => "Cocido"
        ),
    ),
    array(
        "Nombre" => "Wilson",
        "Ocupacion" => "Comer",
        "Color" => "Naranja y blanco",
        "Comidas" => array(
            "Comida favorita" => "Pate sardinas",
            "Comida no deseada" => "chuches"
        ),
    ),
);

echo "La comida favorita de Missi es " . $escula_michis[0]['Comidas']['Comida favorita'];