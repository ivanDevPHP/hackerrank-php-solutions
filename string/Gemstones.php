<?php

/*
 * Complete the 'gemstones' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING_ARRAY arr as parameter.
 */

function gemstones($arr) {
    // Create the set of unique elements from the first rock
    $common_elements = array_unique(str_split($arr[0]));;

    // Iterate over the remaining rocks and calculate the intersection
    for ($i = 0; $i < count($arr); $i++) {
        // Get the set of unique elements from the current rock
        $current_elements = array_unique(str_split($arr[$i]));
        
        // Perform the intersection with the common elements so far
        $common_elements = array_intersect($common_elements, $current_elements);
    }
    
    // Return the number of gem-elements
    return count($common_elements);
}
