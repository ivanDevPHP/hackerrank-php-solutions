<?php

/*
 * Complete the 'findDigits' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function findDigits($n) {
    // Split the number into an array of its digits
    $digits = str_split($n);
    $amountDivisors = 0;
    
    foreach($digits as $digit){
        if($digit > 0 && ($n % $digit === 0)){
            $amountDivisors ++;
        }
    }
    
    return $amountDivisors;
}
