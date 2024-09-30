<?php

/*
 * Complete the 'theLoveLetterMystery' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function theLoveLetterMystery($s) {
    // Write your code here
    $n = strlen($s);
    $operations = 0;

   
    for ($i = 0; $i < $n / 2; $i++) {
        
        $leftChar = $s[$i];
        $rightChar = $s[$n - $i - 1];

        
        if ($leftChar != $rightChar) {
            $operations += abs(ord($leftChar) - ord($rightChar));
        }
    }

    return $operations;
}
