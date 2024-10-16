<?php

/*
 * Complete the 'anagram' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function anagram($s) {
    $n = strlen($s);

    // If the string length is odd, return -1 as it can't be split equally
    if ($n % 2 !== 0) {
        return -1;
    }

    // Split the string into two halves
    $half = $n / 2;
    $s1 = substr($s, 0, $half);
    $s2 = substr($s, $half);

    // Initialize frequency arrays for both substrings
    $freq1 = array_fill(0, 26, 0);
    $freq2 = array_fill(0, 26, 0);

    // Count the frequency of characters in the first half (s1)
    for ($i = 0; $i < $half; $i++) {
        $freq1[ord($s1[$i]) - ord('a')]++;
    }

    // Count the frequency of characters in the second half (s2)
    for ($i = 0; $i < $half; $i++) {
        $freq2[ord($s2[$i]) - ord('a')]++;
    }

    // Calculate the minimum number of changes required
    $changes = 0;
    for ($i = 0; $i < 26; $i++) {
        // Only count the excess characters in s1 that don't match s2
        if ($freq1[$i] > $freq2[$i]) {
            $changes += $freq1[$i] - $freq2[$i];
        }
    }

    return $changes;

}
