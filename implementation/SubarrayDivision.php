<?php

/*
 * Complete the 'birthday' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY s
 *  2. INTEGER d
 *  3. INTEGER m
 */

function birthday($s, $d, $m) {
    // Write your code here

    //No need to loop through the entire array, 
    $limit = count($s) - $m +1;
    $cnt = 0;
    for($i = 0; $i < $limit; $i++){
        $total = $s[$i];
        for($j = 1; $j < $m; $j++){
            $total += $s[$i + $j];
        }
    
        if($total == $d){
            $cnt ++;
        }
    }
    return $cnt;
}