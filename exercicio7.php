<?php
    $pessoa = ["nome" => "Andreysson", "idade" => 23 , "Homem" => true];
    echo $pessoa["nome"]. "<br>";
    
    #desafio
    if($pessoa["idade"] > 18) {
        echo "É MAIOR DE IDADE";
    }
    else {
        echo "É menor de idade";
    }
?>