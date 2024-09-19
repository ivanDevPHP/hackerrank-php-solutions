<?php

/*
 * Complete the 'pangrams' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function pangrams($s) {
    // Write your code here
    // Create an array of all uppercase letters
    $alphas = range('A', 'Z');
    
    // Convert the input string to uppercase to make the check case-insensitive
    $s = strtoupper($s);
    
    // Check if each letter in the alphabet exists in the string
    foreach ($alphas as $letter) {
        if (strpos($s, $letter) === false) {
            return "not pangram"; // If a letter is missing, return "not pangram"
        }
    }
    
    return "pangram"; // If all letters are found, return "pangram"
}
