<?php

/*
 * Complete the 'repeatedString' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts following parameters:
 *  1. STRING s
 *  2. LONG_INTEGER n
 */

function repeatedString($s, $n) {
    // Count the number of 'a' characters in the original string
    $aCountInOriginalString = substr_count($s, 'a');
    
    // Calculate how many full repetitions of the string can fit in the first 'n' characters
    $fullRepetitions = intdiv($n, strlen($s));
    
    // Calculate the remaining characters after the full repetitions
    $remainingCharacters = $n % strlen($s);
    
    // Initialize the count of 'a' in the remaining part to zero
    $aCountInRemainingPart = 0;
    
    // If there are remaining characters, count 'a's in the substring of those characters
    if ($remainingCharacters > 0) {
        // Take the substring up to the remaining character count
        $substringToConsider = substr($s, 0, $remainingCharacters);
        // Count 'a's in that substring
        $aCountInRemainingPart = substr_count($substringToConsider, 'a');
    }
    
    // Return the total count of 'a' in the full repetitions and the remaining part
    return ($fullRepetitions * $aCountInOriginalString) + $aCountInRemainingPart;
}
