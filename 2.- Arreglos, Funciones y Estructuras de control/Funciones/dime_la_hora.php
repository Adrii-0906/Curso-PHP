<?php

echo "Holaa! Me podrias decir que hora es?? \n";
echo "Claroo!! Son las " . obtener_hora();

function obtener_hora() {
    return date("H:i a");
}