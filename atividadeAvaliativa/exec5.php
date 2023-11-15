<?php
function sumEvenNumbers($numero) {
   if($numero < 0){
    return "Por favor um numero positivo";
   };
   $soma = 0;

   for($i = 1; $i <= $numero; $i++) {
    if($i % 2 == 0) {
        $soma += $i;
    }
   }
   return $soma;
    
}
$numero_formnecido = 10;
 $resultado = sumEvenNumbers($numero_formnecido);
 echo "A soma dos numero é: $resultado ";
?>
