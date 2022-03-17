<?php

function miniMaxSum($arr) {
    // Write your code here
    $sum = array_sum($arr);
    $minValue = $sum - max($arr);
    $maxValue = $sum - min($arr);
    
    echo $minValue." ".$maxValue; 
}

