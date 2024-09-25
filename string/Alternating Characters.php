<?php

/*
 * Complete the 'alternatingCharacters' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function alternatingCharacters($s) {
    // Track the number of deletions required
    $amountToDelete = 0;

    // Traverse the string, comparing each character with the next one
    for ($i = 0; $i < strlen($s) - 1; $i++) {
        if ($s[$i] === $s[$i + 1]) {
            $amountToDelete++;
        }
    }
    
    return $amountToDelete;
}
