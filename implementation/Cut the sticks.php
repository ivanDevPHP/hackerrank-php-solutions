<?php

/*
 * Complete the 'cutTheSticks' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function cutTheSticks($arr) {
    //Empty array to store the number of sticks at each iteration
    $sticksCut = [];
    

    while(count($arr) > 0){
        // Append the current number of sticks before cutting
        $sticksCut[] = count($arr);
        
        // Find the shortest stick
        $shortestStick = min($arr);
        
        // Remove all occurrences of the shortest stick from the array
        $arr = array_diff($arr, [$shortestStick]);
    }
    
    return $sticksCut;
}
