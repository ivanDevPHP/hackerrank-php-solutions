<?php
function camelcase($s) {
    // Write your code here
    $count = 1;
    for ($i = 0;  $i < strlen($s);  $i ++) {
        if (ctype_upper($s[$i])) {
            $count ++;
        }
    }
    return $count;
}