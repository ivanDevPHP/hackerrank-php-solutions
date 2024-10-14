<?php

/*
 * Complete the 'taumBday' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER b
 *  2. INTEGER w
 *  3. INTEGER bc
 *  4. INTEGER wc
 *  5. INTEGER z
 */

function taumBday($b, $w, $bc, $wc, $z) {
    // Calculate the cost of buying gifts
    $costBlack = min($bc, $wc + $z);
    $costWhite = min($wc, $bc + $z);

    return ($b * $costBlack) + ($w * $costWhite);
}
