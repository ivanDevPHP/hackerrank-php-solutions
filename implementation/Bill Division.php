<?php

function bonAppetit($bill, $k, $b) {
    // Write your code here
    unset($bill[$k]);
    $cost_per_person = array_sum($bill)/2;
    
    if($cost_per_person == $b){
        echo "Bon Appetit";
    }else{
        echo $b - $cost_per_person;
    }
}
