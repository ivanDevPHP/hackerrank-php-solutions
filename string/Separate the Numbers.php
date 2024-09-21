<?php

/*
 * Complete the 'separateNumbers' function below.
 *
 * The function accepts STRING s as parameter.
 */

function separateNumbers($s) {
    $n = strlen($s);

    // Try lengths for the first number from 1 to n/2
    for ($length = 1; $length <= $n / 2; $length++) {
        $firstNumber = intval(substr($s, 0, $length)); // Get the first number
        $currentNumber = $firstNumber;
        $currentIndex = $length;
        $isValid = true;

        // Build the sequence by incrementing the number and checking the next part of the string
        while ($currentIndex < $n) {
            $currentNumber++;
            $nextNumberStr = strval($currentNumber);
            $nextLength = strlen($nextNumberStr);

            if (substr($s, $currentIndex, $nextLength) != $nextNumberStr) {
                $isValid = false;
                break;
            }

            $currentIndex += $nextLength;
        }

        if ($isValid) {
            echo "YES " . $firstNumber . "\n";
            return;
        }
    }
