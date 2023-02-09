<?php

function getTotalX($a, $b) {
    // Write your code here
    $result = 0;
    $minB = min($b);
    $maxA = max($a);
    for ($i = $maxA; $i <= $minB; $i++) {
        $satisfy = true;
        if ($satisfy) {
            foreach ($b as $numB) {
                if ($numB % $i !== 0) {
                    $satisfy = false;
                }
            }
        }
        
        foreach ($a as $numA) {
            if ($i % $numA !== 0) {
                $satisfy = false;
            }
        }
        
        if ($satisfy) {
            $result++;
        }
    }
    return $result;
}
