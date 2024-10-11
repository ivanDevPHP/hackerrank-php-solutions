<?php

/*
 * Complete the 'libraryFine' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER d1
 *  2. INTEGER m1
 *  3. INTEGER y1
 *  4. INTEGER d2
 *  5. INTEGER m2
 *  6. INTEGER y2
 */

function libraryFine($d1, $m1, $y1, $d2, $m2, $y2) {
    // Check if the book was returned in the same year
    if($y1 == $y2){
        // Check if the book was returned in the same month
        if($m1 == $m2){
            // No fine if returned on or before the due date
            if($d1 <= $d2){
                return 0;
            }else{
               return (15) * ($d1 - $d2); 
            }
        // Check if the book was returned in month before
        }else if($m1 < $m2){
            return 0;
        }else{
            return (500) * ($m1 - $m2);
        }
    // Check if the book was returned in year before
    }else if($y1 < $y2){
        return 0;
    }else{
        return 10000;
    }
}
