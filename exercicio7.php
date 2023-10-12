<?php
    $pessoa = ["nome" => "Andreysson", "idade" => 23];
    echo $pessoa["nome <br>"];
    
    if($pessoa["idade"] > 18) {
        echo "É MAIOR DE IDADE";
    }
?>