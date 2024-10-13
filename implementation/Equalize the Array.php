<?php

/*
 * Complete the 'equalizeArray' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function equalizeArray($arr) {
    // Count occurrences of each element in the array
    $amount = array_count_values($arr);
    
    // The minimum number of deletions is the total number of elements
    // minus the number of occurrences of the most frequent element
    return array_sum($amount) - max($amount);
    
}
