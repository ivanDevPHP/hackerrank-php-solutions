<?php

function timeConversion($s) {
    // Write your code here
    $time = strtotime($s);
    return date('H:i:s', $time);
}
