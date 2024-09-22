<?php

/*
 * Complete the 'hurdleRace' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER k
 *  2. INTEGER_ARRAY height
 */

function hurdleRace($k, $height) {    
    // Find the maximum height
    $maxHeight = max($height);
    
    // If the character can already jump higher or equal to the tallest hurdle
    if ($k >= $maxHeight) {
        return 0;
    } 
    
    // Calculate how many doses of potion are required
    return ($maxHeight - $k);
}
