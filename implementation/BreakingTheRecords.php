<?php

/*
 * Complete the 'breakingRecords' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY scores as parameter.
 */

function breakingRecords($scores) {
    // Write your code here
    
    //The records
    $max = $scores[0];
    $min = $scores[0];
    
    //numbers of times she broke her records
    $countMax = 0;
    $countMin = 0;
    
    for($i = 0; $i < count($scores); $i++){
        if($max < $scores[$i]){
            $countMax++;
            $max = $scores[$i];
        }
        
        if($min > $scores[$i]){
            $countMin++;
            $min = $scores[$i];
        }
    }
    
    return [$countMax, $countMin];
}