<?php

/*
 * Complete the 'countApplesAndOranges' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER s
 *  2. INTEGER t
 *  3. INTEGER a
 *  4. INTEGER b
 *  5. INTEGER_ARRAY apples
 *  6. INTEGER_ARRAY oranges
 */

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    // Write your code here
    $landApple = 0;
    for($i = 0; $i < count($apples); $i++){
        if(($apples[$i] + $a) >= $s && ($apples[$i] + $a) <= $t){
            $landApple ++;
        }
    }
    
    $landOrange = 0;
    for($i = 0; $i < count($oranges); $i++){
        if(($oranges[$i] + $b) >= $s && ($oranges[$i] + $b) <= $t){
            $landOrange ++;
        }
        
    }
    echo $landApple."\n";
    echo $landOrange."\n";
}