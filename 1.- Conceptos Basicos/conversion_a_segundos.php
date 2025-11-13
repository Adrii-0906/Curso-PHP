<?php

$horas = readline("Igrese las horas: ");
$minutos = readline("Igrese las minutos: ");
$segundos = readline("Igrese las segundos: ");



$horas_a_segundos = $horas * 3600;
$minutos_a_segundos = $minutos * 60;

$total_segundos = $horas_a_segundos + $minutos_a_segundos + $segundos;
echo "El total de segundos es $total_segundos";
