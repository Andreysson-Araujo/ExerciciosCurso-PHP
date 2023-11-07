<?php
    $c = 4;
    $loop = 30;
    
    while ($c < $loop) {
        echo "Executando loop $c <br>";
        
        if ($c === 24) {
            echo "Parando Loop"; 
            break;
        }
        $c += 2; // Aumentar o valor de $c para evitar um loop infinito
    }
?>
