<?php
function dayOfProgrammer($year) {
    // Write your code here
    $leapYear = false;
    if ($year < 1918) {
        if ($year % 4 == 0) {
            $leapYear = true;
        }
    } else {
        if ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)) {
            $leapYear = true;
        }
    }

    if ($year === 1918) {
        $day = 26;
    } elseif ($leapYear === true) {
        $day = 12;
    } else {
        $day = 13;
    }

    return str_pad($day, 2, "0", STR_PAD_LEFT) . ".09." . $year;
}
