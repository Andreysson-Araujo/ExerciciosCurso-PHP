<?php
    $a = 45;
    $b = 84;
    if(is_int($a)){
        echo "A variavel $a é um numero <br>";
        echo "Entrou no segundo if <br>";
         
        if($a + $b > 100) {
            echo "A SOMA DE $a com $b é maior que 100 <br> ";
        }else{
            echo "Não é maior qu 100";
        }
    } else {
        echo "Não é <br>";
    }