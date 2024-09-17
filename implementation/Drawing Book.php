<?php

function pageCount($n, $p) {
     // Turns from the front
    $frontTurns = intdiv($p, 2);
    
    // Turns from the back
    $backTurns = intdiv($n, 2) - intdiv($p, 2);
    
    return min($frontTurns, $backTurns);
}
