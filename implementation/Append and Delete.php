<?php

/*
 * Complete the 'appendAndDelete' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. STRING s
 *  2. STRING t
 *  3. INTEGER k
 */

function appendAndDelete($s, $t, $k) {
    // Find the length of the common prefix
    $commonLength = 0;
    for ($i = 0; $i < min(strlen($s), strlen($t)); $i++) {
        if ($s[$i] == $t[$i]) {
            $commonLength++;
        } else {
            break;
        }
    }
    
    // Calculate the minimum number of operations needed
    $deletions = strlen($s) - $commonLength; // characters to delete from s
    $appends = strlen($t) - $commonLength;   // characters to append to make t
    
    // Total operations needed
    $minOperations = $deletions + $appends;
    
    // Check if we can perform exactly k operations
    // If k is larger than the total length of both strings, it means you have enough operations to delete the entire string s and rebuild t from scratch.
    //If k is greater than the minimum number of operations required ($minOperations), meaning you have some extra operations.
    if ($k == $minOperations || 
        ($k >= strlen($s) + strlen($t)) ||  // Can delete everything and rewrite
        ($k > $minOperations && ($k - $minOperations) % 2 == 0)) {
        return "Yes";
    }
    
    return "No";

}
