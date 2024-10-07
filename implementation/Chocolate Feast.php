<?php

/*
 * Complete the 'chocolateFeast' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER c
 *  3. INTEGER m
 */

function chocolateFeast($n, $c, $m) {
    $chocolates = intdiv($n, $c);
    
    // Initially, the number of wrappers is equal to the number of chocolates
    $wrappers = $chocolates;
    
    // While Brenno has enough wrappers to trade for chocolates
    while ($wrappers >= $m) {
        // Number of chocolates he can trade for wrappers
        $extraChocolates = intdiv($wrappers, $m);
        
        // Add these chocolates to the total
        $chocolates += $extraChocolates;
        
        // Update the number of wrappers: leftovers + new wrappers from the traded chocolates
        $wrappers = $wrappers % $m + $extraChocolates;
    }
    
    // Return the total number of chocolates Brenno can eat
    return $chocolates;

}
