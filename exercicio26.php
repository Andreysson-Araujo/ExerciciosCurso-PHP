<?php 
    $velocidade = 40;
    $limite = 40;

    if ($velocidade < $limite) {
        echo "Velocidade Correta";
    } elseif ($velocidade = $limite) {
        echo "Cuidado esta no limete";
    } else {
        echo "multado";
    }