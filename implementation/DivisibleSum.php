<?php

/*
 * Complete the 'divisibleSumPairs' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER k
 *  3. INTEGER_ARRAY ar
 */

function divisibleSumPairs($n, $k, $ar) {
    // Write your code here
    $total = 0 ;
    for ($i = 0;  $i < count($ar);  $i ++) {
        for ($j = $i+1;  $j < count($ar);  $j ++) {
            if (($ar[$i] + $ar[$j]) % $k == 0) {
                $total ++;
            }
        }
    }
    
    return $total;
}
