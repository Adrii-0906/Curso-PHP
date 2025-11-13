<?php

//function suma($a = 1, $b = 1) {
//    echo "La suma de $a + $b es : " . $a + $b . "\n";
//}

// $array1 = [1,2,3];
// $array2 = [4,5,6];

// $resultado = [...$array1, ...$array2];

// var_dump($resultado);

//function suma($a, $b) {
//    echo "La suma de $a + $b es : " . $a + $b . "\n";
//}

//$numeros = [1, 2];
//$numeros2 = [50, 20];
//$numeros3 = [10000, 2];

//suma(...$numeros);
//suma(...$numeros2);
//suma(...$numeros3);

function suma_infinita(...$params){

    $suma = 0;

    foreach ($params as $numero) {
        $suma += $numero;
    }

    echo "La suma es: $suma \n";
}

suma_infinita(1, 2);
suma_infinita(1, 2, 3);
suma_infinita(100, 40, 2, 9, 3);