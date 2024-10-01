<?php

/*
 * Complete the 'gameOfThrones' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function gameOfThrones($s) {
    // Write your code here
    $charCount = array_count_values(str_split($s));
    $oddCount = 0;
    
    foreach ($charCount as $count) {
        if ($count % 2 != 0) {
            $oddCount++;
        }
    }
    
    // If more than one character has an odd frequency, it cannot form a palindrome
    return $oddCount > 1 ? "NO" : "YES";
}
