<?php

// Complete the catAndMouse function below.
function catAndMouse($x, $y, $z) {
    // Calculate the distance of Cat A and Cat B from the mouse
    $catADistance =  abs($x - $z);
    $catBDistance =  abs($y - $z);
    
    // Compare the distances and determine the outcome
    if($catADistance > $catBDistance ){
        return 'Cat B';
    }else if($catADistance < $catBDistance){
        return 'Cat A';
    }
    
    return 'Mouse C';
}
