<?php

function getPokemon() {
    $numero_aleatorio = rand(1, 5);

    switch ($numero_aleatorio) {
        case 1:
            echo "Pikachu";
            break;
        case 2:
            echo "Charmander";
            break;
        case 3:
            echo "Mewtwo";
            break;
        default:
            echo "Lo siento no hay pokemon para ti";
            break;
    }
}
getPokemon();
