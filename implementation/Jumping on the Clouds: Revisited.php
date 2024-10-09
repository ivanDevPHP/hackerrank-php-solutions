<?php

// Complete the jumpingOnClouds function below.
function jumpingOnClouds($c, $k) {
    $e = 100; // Starting energy
    $position = 0; // Start at cloud 0
    
    do {
        // Jump to the next cloud
        $position = ($position + $k) % count($c);
        
        // Decrease energy by 1 for the jump, and an additional 2 if it's a thunderhead
        $e -= ($c[$position] === 1) ? 3 : 1;

    } while ($position != 0); // Loop until back to cloud 0
    
    return $e;
}
