<?php

/*
 * Complete the 'funnyString' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function funnyString($s) {
    // Write your code here
    // Create a reversed version of the string
    $reverseArrayS = str_split(strrev($s));
    $arrayS = str_split($s);
    
    $n = count($arrayS); // Get the length of the string

    // Loop through the string and compare the absolute differences
    for ($i = 1; $i < $n; $i++) {
        // Compute the absolute difference for the original string
        $diffOriginal = abs(ord($arrayS[$i]) - ord($arrayS[$i - 1]));
        // Compute the absolute difference for the reversed string
        $diffReversed = abs(ord($reverseArrayS[$i]) - ord($reverseArrayS[$i - 1]));

        // If any difference doesn't match, return "Not Funny"
        if ($diffOriginal !== $diffReversed) {
            return "Not Funny";
        }
    }

    // If all differences match, return "Funny"
    return "Funny";
}
