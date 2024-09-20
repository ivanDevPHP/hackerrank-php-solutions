<?php

/*
 * Complete the 'weightedUniformStrings' function below.
 *
 * The function is expected to return a STRING_ARRAY.
 * The function accepts following parameters:
 *  1. STRING s
 *  2. INTEGER_ARRAY queries
 */

function weightedUniformStrings($s, $queries) {
    // Initialize an empty set to store weights of uniform substrings
    $weights = [];
    
    $alphas = range('a', 'z');

    // Initialize variables to track the previous character and its current cumulative weight
    $prev_char = '';
    $current_weight = 0;
    
    // Iterate through the string to calculate weights of uniform substrings
    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];
        $weight = array_search($char, $alphas) + 1;  // Calculate the weight of the current character

        if ($char == $prev_char) {
            // If the character is the same as the previous one, continue the uniform substring
            $current_weight += $weight;
        } else {
            // If it's a new character, reset the cumulative weight
            $current_weight = $weight;
            $prev_char = $char;
        }

        // Add the current uniform substring's weight to the set
        $weights[$current_weight] = true;
    }
    
    // Prepare an array to store the results for each query
    $results = [];

    // For each query, check if the weight exists in the set
    foreach ($queries as $query) {
        if (isset($weights[$query])) {
            $results[] = "Yes";
        } else {
            $results[] = "No";
        }
    }

    return $results;
}
