<?php

/*
 * Complete the 'viralAdvertising' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function viralAdvertising($n) {
    // Write your code here
    $recipients = 5;
    $cumulative = 0;
    
    for($i = 1; $i <= $n; $i++) {
        $liked = floor($recipients / 2);
        $recipients = $liked * 3;
        $cumulative += $liked;
    }
    
    return $cumulative;
}
