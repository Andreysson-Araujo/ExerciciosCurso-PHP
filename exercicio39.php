<?php
$arr = [
    "porta" => 100,
    "maçaneta" => 5,
    "motor" => 2000,
    "retrovisor" => 20,
];
function itensCaros($arr)
{
    $arrItensCaros = [];

    foreach ($arr as $item => $valor) {
        if ($valor > 15) {
            array_push($arrItensCaros, $item);
        }
    }
    ;

    return $arrItensCaros;
}

$novoArr = itensCaros($arr);
print_r($novoArr);
?>