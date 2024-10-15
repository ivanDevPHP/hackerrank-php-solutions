<?php

/*
 * Complete the 'beautifulTriplets' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER d
 *  2. INTEGER_ARRAY arr
 */

function beautifulTriplets($d, $arr) {
    // Write your code here
    $count = 0;
    
    foreach ($arr as $value) {
        if (in_array($value + $d, $arr) && in_array($value + 2 * $d, $arr)) {
            $count++;
        }
    }
    
    return $count;
}
