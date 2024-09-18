<?php

/*
 * Complete the 'hackerrankInString' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function hackerrankInString($s) {
   // The target word we are looking for as a subsequence
    $mainWord = "hackerrank";
    // Position in the mainWord to track the characters being matched
    $mainWordPosition = 0;

    // Loop through each character in the input string
    for ($i = 0; $i < strlen($s); $i++) {
        // If the current character matches the character at mainWordPosition in hackerrank
        if ($s[$i] == $mainWord[$mainWordPosition]) {
            // Move to the next character in hackerrank
            $mainWordPosition++;
        }
        // If all characters of hackerrank are matched
        if ($mainWordPosition == strlen($mainWord)) {
            return "YES";
        }
    }

    // If we exit the loop without having matched all characters, return NO
    return "NO";
}
