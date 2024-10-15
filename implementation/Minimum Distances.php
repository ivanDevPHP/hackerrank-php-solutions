<?php

/*
 * Complete the 'minimumDistances' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function minimumDistances($a) {    
    // Check if there are no duplicate values in the array
    // If no duplicates, return -1
    if (!array_diff_assoc($a, array_unique($a))) {
        return -1; 
    }
    
    $distance = []; // Array to store distances between pairs of equal elements
    $numberUsed = []; // Array to keep track of numbers already processed

    for ($i = 0; $i < count($a); $i++) {
        // Only process the number if it hasn't been processed before
        if (!in_array($a[$i], $numberUsed)) {
            // Get all the indices where the current number $a[$i] appears in the array
            $keys = array_keys($a, $a[$i]);
            
            // If the number appears more than once, calculate the distance
            if (count($keys) >= 2) {
                // The maximum index where this number appears
                $max = max($keys);
                
                $distance[] = $max - $i;
                $numberUsed[] = $a[$i];
            }
        }
    }
    
    return min($distance);

}
