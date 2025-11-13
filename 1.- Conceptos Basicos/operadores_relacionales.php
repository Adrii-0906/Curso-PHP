<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// operador Igual (==)
var_dump($a == $b2);

// operador Identico (===)
var_dump($a === $b);
var_dump($a === $b2);

// operador Diferente (!=)
var_dump($a != $b);
var_dump($a != $b2);

// operador Diferente (!==)
var_dump($a !== $b);
var_dump($a !== $b2);

// operador Menor que (<)
var_dump($a < $b);
var_dump($c < $b);
var_dump($d < $b);

// operador Mayor que (>)
var_dump($a > $b);
var_dump($c > $b);
var_dump($d > $b);

// operador Mayor o igual que (>=)
var_dump($a >= $b);
var_dump($c >= $b);
var_dump($d >= $b);

// operador Menor o igual que (<=)
var_dump($a <= $b);
var_dump($c <= $b);
var_dump($d <= $b);

// operador Nave espacial (<=>)
echo 2 <=> 1;
echo "\n";
echo 1 <=> 1;
echo "\n";
echo -50 <=> 1;
echo "\n";
// operador funsion de null (??)
$edad = 23;
echo $edad_juanito ?? $edad;