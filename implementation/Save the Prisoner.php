<?php

/*
 * Complete the 'saveThePrisoner' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER n
 *  2. INTEGER m
 *  3. INTEGER s
 */

function saveThePrisoner($n, $m, $s) {
    // Write your code here
    $lastPrisoner = ($s + $m - 1) % $n;
    
    //If the result is 0, means the last candy is given to the last prisoner.
    return $lastPrisoner == 0 ? $n : $lastPrisoner;
}
