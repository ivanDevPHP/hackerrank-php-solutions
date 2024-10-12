<?php

/*
 * Complete the 'jumpingOnClouds' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY c as parameter.
 */

function jumpingOnClouds($c) {
    // Write your code here
    $countJumps = 0;
    $currentCloud = 0;
    
    while($currentCloud < count($c) - 1 ){
        if($currentCloud + 2 < count($c) && $c[$currentCloud + 2] === 0){
            $currentCloud = $currentCloud + 2;
        }else{
            $currentCloud = $currentCloud + 1;
        }
        
        $countJumps ++;
    }
    
    return $countJumps;
}
