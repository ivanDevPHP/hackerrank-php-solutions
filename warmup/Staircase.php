<?php

function staircase($n) {
    // Write your code here
    for($i =1; $i <= $n; $i++){
        echo str_repeat(" ", $n - $i);

        echo str_repeat("#", $i);

        // Starts printing on a new line
        echo "\n";
    }
}
