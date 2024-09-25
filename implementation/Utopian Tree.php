<?php

/*
 * Complete the 'utopianTree' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function utopianTree($n) {
    $isSpring = true;
    $height = 1; // Initial height of the tree

    for ($i = 1; $i <= $n; $i++) {
        if ($isSpring) {
            $height *= 2; // Spring: height doubles
        } else {
            $height++; // Summer: height increases by 1
        }
        $isSpring = !$isSpring; // Toggle between spring and summer
    }

    return $height;
}
