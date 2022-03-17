<?php

function birthdayCakeCandles($candles) {
    // Write your code here
    $maxValue = max($candles);
    $countTallest = 0;
    for($i=0; $i < count($candles); $i++){
        if($candles[$i] == $maxValue){
            $countTallest++;
        }
    }
    return $countTallest;
}

