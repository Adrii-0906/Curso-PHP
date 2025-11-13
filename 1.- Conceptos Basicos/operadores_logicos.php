<?php

$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan_con_php = false;

// Operador and (&&)
var_dump($michis_felinos && $michis_4_patas);
$resultado = $michis_4_patas and $michis_programan_con_php;
var_dump($resultado);
// Operador or (||)
var_dump($michis_4_patas || $michis_vuelan);
// Operador NOT (!)
var_dump(!$michis_4_patas);

echo "\n";