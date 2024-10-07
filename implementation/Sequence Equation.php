<?php

/*
 * Complete the 'permutationEquation' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY p as parameter.
 */

function permutationEquation($p) {
    $result = [];
    

    foreach ($p as $index => $value) {
        // Find the position (1-based index) of (index + 1) in the array
        $firstIndex = (array_search($index + 1, $p)) + 1; // +1 for 1-based index
        
        // Find the position (1-based index) of the firstIndex in the array
        $secondIndex = (array_search($firstIndex, $p)) + 1; // +1 for 1-based index
        
        // Store the secondIndex in the result array
        $result[] = $secondIndex;
    }
    
    // Return the final results array
    return $result;
}
