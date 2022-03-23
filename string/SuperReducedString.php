<?php

/*
 * Complete the 'superReducedString' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING s as parameter.
 */

function superReducedString($s) {
    // Write your code here
    $arrayS = str_split($s);
    $len = count($arrayS);
    for($i = 0; $i < $len; $i++){
        if($arrayS[$i] === $arrayS[$i + 1]){
            unset($arrayS[$i]);
            unset($arrayS[$i + 1]);
            $arrayS = array_values($arrayS);
            $i = -1;
            $len = $len-2;
        }
    }
    
    if(count($arrayS) == 0){
        return 'Empty String';
    }
    
    return implode("", $arrayS);
}