<?php

function diagonalDifference($arr) {
    // Write your code here
    $counter = count($arr);
    //first diagonal
    $x1 = 0;
    //second diagonal
    $y1 = 0;
    for($i =0; $i < $counter; $i++){
        $x1 += $arr[$i][$i];
        $y1 += $arr[$i][$counter-1-$i];
    }
    return abs($x1 - $y1);
}
