<?php

/*
 * Complete the 'palindromeIndex' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts STRING s as parameter.
 */

function palindromeIndex($s) {
    $n = strlen($s);
    
    for ($i = 0, $j = $n - 1; $i < $j; $i++, $j--) {
        if ($s[$i] !== $s[$j]) {
            
            $isPalindromeAfterRemovingLeft = true;
            for ($x = $i + 1, $y = $j; $x < $y; $x++, $y--) {
                if ($s[$x] !== $s[$y]) {
                    $isPalindromeAfterRemovingLeft = false;
                    break;
                }
            }
            
            if ($isPalindromeAfterRemovingLeft) {
                return $i; 
            }

            
            $isPalindromeAfterRemovingRight = true;
            for ($x = $i, $y = $j - 1; $x < $y; $x++, $y--) {
                if ($s[$x] !== $s[$y]) {
                    $isPalindromeAfterRemovingRight = false;
                    break;
                }
            }
            
            if ($isPalindromeAfterRemovingRight) {
                return $j; 
            }
            
            return -1;
    }
    
    return -1;
}
