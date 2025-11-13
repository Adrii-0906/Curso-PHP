<?php
function es_estudiante_legend($platzi_rank) {

    if ($platzi_rank >= 20000) {
        echo "Eres un estudiante legend!! \n";
    } else {
        echo "Aun no eres un estudiante legend \n";
    }
}

do {
    $platzi_rank_user = (int) readline("Por favor, dinos cual es tu platzi Rank: ");
    es_estudiante_legend($platzi_rank_user);
} while (true);

