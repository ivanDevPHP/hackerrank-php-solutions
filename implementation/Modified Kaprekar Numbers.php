<?php

/*
 * Complete the 'kaprekarNumbers' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER p
 *  2. INTEGER q
 */

function kaprekarNumbers($p, $q) {
    // Write your code here
    $noModifiedKaprekar = true;
    for($i = $p; $i <= $q; $i++){
        // Calculate the square of the number
        $sqrt = strval($i ** 2);
        
        // Split the squared number into two parts
        $mid = strlen($sqrt) / 2;
        $firstHalf = substr($sqrt , 0, $mid);
        $secondHalf = substr($sqrt , $mid);
        
        // Check if the sum of the left and right parts equals the original number
        $result = (int)$firstHalf +  (int)$secondHalf;
        if($result == $i){
          echo $i . " ";
          $noModifiedKaprekar = false; // Found at least one Kaprekar number
        }
    }
    
    // If no Kaprekar numbers were found, print "INVALID RANGE"
    if($noModifiedKaprekar){
        echo "INVALID RANGE" . " ";
    }
}
