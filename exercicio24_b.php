<?php
    
    $limte = 80;
    $peso_a =  45;
    $peso_b = 95.2;

    if($peso_a  > $limte){
         echo"peso $peso_b PASSOU DO LIMITE";
    } else {
        echo "$peso_a peso dentro do limiet <br>";
    }

    if($peso_b > $limte){
        echo "peso $peso_b PASSOU DO LIMITE";
    } else {
        echo "$peso_b peso dentro do limiet <br>";
    }