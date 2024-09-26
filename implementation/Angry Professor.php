<?php

/*
 * Complete the 'angryProfessor' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER k
 *  2. INTEGER_ARRAY a
 */

function angryProfessor($k, $a) {
    // Write your code here
    // Count how many students arrived on time
    $onTime = 0;
    for($i = 0; $i < count($a); $i++){
        if($a[$i] <= 0){
            $onTime ++;
        }
    }

    return ($onTime >= $k) ? 'NO' : 'YES';
}
