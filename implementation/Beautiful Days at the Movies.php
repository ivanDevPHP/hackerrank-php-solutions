<?php

/*
 * Complete the 'beautifulDays' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER i
 *  2. INTEGER j
 *  3. INTEGER k
 */

function beautifulDays($i, $j, $k) {
    // Write your code here
    $beautifulDays = 0;
    for($x = $i; $x <= $j; $x ++){
        $reverseNumber = intval(strrev((string) $x));
        
        $difference = abs($x - $reverseNumber);
        
        
        
        if($difference % $k == 0){
            $beautifulDays ++;
        }
    }
    
    return $beautifulDays;

}
