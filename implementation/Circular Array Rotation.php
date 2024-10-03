<?php

/*
 * Complete the 'circularArrayRotation' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER k
 *  3. INTEGER_ARRAY queries
 */

function circularArrayRotation($a, $k, $queries) {
    // Write your code here
    $n = count($a); // Length of the array
    $k = $k % $n;   // Optimize the number of rotations

    $result = [];
    foreach ($queries as $query) {
        // Calculate the index after rotation
        $rotatedIndex = ($query - $k + $n) % $n;
        $result[] = $a[$rotatedIndex];
    }
    
    return $result;
}
