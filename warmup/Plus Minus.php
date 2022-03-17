<?php

function plusMinus($arr) {
    // Write your code here
    $counter = count($arr);
    $positive = 0;
    $negative = 0;
    $zeros = 0;
    for($i = 0; $i < $counter; $i++){
        if($arr[$i] > 0){
            $positive++;
        }elseif($arr[$i] < 0){
            $negative++;
        }else{
            $zeros++;
        }
    }
    $positiveResult = round($positive / $counter, 6);
    $negativeResult = round($negative / $counter, 6);
    $zerosResult = round($zeros / $counter, 6);
     
    echo $positiveResult . "\n";
    echo $negativeResult . "\n";
    echo $zerosResult . "\n";
}

