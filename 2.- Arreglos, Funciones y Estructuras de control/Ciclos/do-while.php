<?php

$usernames = ["Pepito123", "Juanito123", "Adri0906"];

do {
    $username = readline("Por favor, igresa tu nuevo nombre de usuario: ");

} while (in_array($username, $usernames));