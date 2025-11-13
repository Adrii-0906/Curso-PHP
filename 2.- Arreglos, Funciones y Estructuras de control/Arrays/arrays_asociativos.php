<?php

$edades = array(
  "Carlos" => 20,
  "Mr.Michi" => 18,
  "Juan" => 40
);

echo "La edad de Mr.Michi es " . $edades["Mr.Michi"] . " \n";

$cafes = array(
    "Capuchino" => 2,
    "Latte" => 2,
    "Americano" => 3
);

echo "El precio del cafe Americano es de {$cafes["Americano"]} euros" . "\n";

$personas = array(
    "Carlos" => array(
      "edad" => 20,
      "apellido" => "Santana"
    ),
    "Mr.Michi" => array(
        "edad" => 18,
        "apellido" => "Michisancio"
    ),
);

echo "La informacion de Mr.Michi es: Edad " . $personas["Mr.Michi"]["edad"] . " Apellido: " . $personas["Mr.Michi"]["apellido"] . "\n";