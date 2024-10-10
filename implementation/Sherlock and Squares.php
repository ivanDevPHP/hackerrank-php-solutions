<?php

/*
 * Complete the 'squares' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER a
 *  2. INTEGER b
 */

function squares($a, $b) {
    // Find the smallest integer x such that x^2 >= a
    $start = ceil(sqrt($a));
    
    // Find the largest integer y such that y^2 <= b
    $end = floor(sqrt($b));
    
    // The number of perfect squares in the range is the difference + 1
    if ($end >= $start) {
        return $end - $start + 1;
    }
    
    return 0;
}
