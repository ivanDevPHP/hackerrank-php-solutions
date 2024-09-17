<?php

/*
 * Complete the 'marsExploration' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function marsExploration($s) {
    $length = strlen($s);
    
    //Expected SOS message
    $expectedMessage = str_repeat("SOS", $length / 3);

    $changes = 0;
    
    // Compare the received message with the expected message
    for ($i = 0; $i < $length; $i++) {
        if ($s[$i] !== $expectedMessage[$i]) {
            $changes++;
        }
    }
    
    return $changes;
}
