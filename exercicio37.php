<?php
    function defineCorCarro($cor = "Vermelha") {
        return "A corr do carro é $cor";
    }

   $carroVermelho = defineCorCarro();
   echo $carroVermelho . "<br>";

   $carroAzul = defineCorCarro("Azul");
   echo $carroAzul . "<br>";

?>