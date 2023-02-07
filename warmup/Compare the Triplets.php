<?php

function compareTriplets($a, $b) {
    $alice = 0;
    $bob = 0;
    for ($i=0; $i<3; $i++) {
        if ($a[$i] > $b[$i]) {
            $alice++;
        } elseif ($a[$i] < $b[$i]) {
            $bob++;
        }
    }
    return array($alice, $bob);
}
