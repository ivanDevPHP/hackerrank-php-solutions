<?php

/*
 * Complete the 'beautifulBinaryString' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING b as parameter.
 */

function beautifulBinaryString($b) {
    // Write your code here
    if(str_contains($b, "010")){
        return substr_count($b, "010");
    }else{
        return 0;
    }
}
