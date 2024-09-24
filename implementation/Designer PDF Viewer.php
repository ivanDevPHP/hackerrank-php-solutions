<?php

/*
 * Complete the 'designerPdfViewer' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY h
 *  2. STRING word
 */

function designerPdfViewer($h, $word) {
     // Create an array of lowercase letters from 'a' to 'z'
    $alphas = range('a', 'z');
    
    // Initialize an array to hold the heights of the letters in the word
    $heights = [];
    
    // Iterate through each letter in the alphabet
    foreach ($alphas as $key => $letter) {
        // Check if the current letter exists in the word
        if (str_contains($word, $letter)) {
            // If it does, add its height to the heights array
            $heights[] = $h[$key];
        }
    }
    
    // Calculate the area: max height * length of the word
    return (max($heights) * strlen($word));
}
