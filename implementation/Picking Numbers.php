<?php

/*
 * Complete the 'pickingNumbers' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function pickingNumbers($a) {
    // Write your code here
 // Initialize frequency array
    $frequency = array_fill(0, 101, 0);

    // Count the frequency of each element in the array
    foreach ($a as $num) {
        $frequency[$num]++;
    }

    $maxLength = 0;

    // Iterate through possible numbers from 1 to 100
    for ($i = 1; $i <= 100; $i++) {
        // The subarray can include numbers `i` and `i-1`
        $maxLength = max($maxLength, $frequency[$i] + $frequency[$i - 1]);
    }

    return $maxLength;
}
