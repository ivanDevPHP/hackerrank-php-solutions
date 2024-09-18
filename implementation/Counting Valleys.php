<?php

/*
 * Complete the 'countingValleys' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER steps
 *  2. STRING path
 */

function countingValleys($steps, $path) {
    // Initialize sea level to 0, representing the starting altitude
    $seaLevel = 0;
    
    // Initialize valley count to 0, to keep track of the number of valleys traversed
    $vallyCount = 0;
    
    // Loop through each step in the path
    for($i = 0; $i < $steps; $i++) {
        
        // If the step is 'D', it means the hiker is going downhill, so decrease the sea level
        if($path[$i] === 'D') {
            $seaLevel--;
        } else {
            // Otherwise, the step is 'U' (uphill), so increase the sea level
            $seaLevel++;
        }
        
        // If the current step is 'D' and the hiker just stepped down to -1 (entered a valley),
        // this means the hiker has just entered a valley, so increment the valley count
        if($path[$i] === 'D' and $seaLevel === -1) {
            $vallyCount++;
        }
    }
    
    // Return the total number of valleys traversed
    return $vallyCount;
}
