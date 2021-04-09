<?php

function printEven($num1, $num2){
    $sum = 0;
    for($i = $num1 + 1; $i < $num2; $i++){
        if($i % 2 == 0){
            $sum = $sum + $i;
        }
    }
    return $sum;
}

echo printEven(1, 10);

?>