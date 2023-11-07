<?php 

    $arr = [4, "Andrey", true, "Rato", false, 15.7, "Test", [], "Palavra", 5, 10, "Alo"];

    $x= count($arr);
    $y = 0;

    while($y < $x) {
        if (is_string($arr[$y])) {
            echo $arr[$y] . "<br>";
        }    
        
        $y ++;
    }

?>