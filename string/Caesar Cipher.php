<?php

  function caesarCipher($s, $k) {
    // Write your code here
    $encryptedString = '';
    $startLetter = ord("a");
    $endLetter = ord("z");
    $startUpperLetter = ord("A");
    $endUpperLetter = ord("Z");
    for ($i = 0; $i < strlen($s); $i++) {
        if (ctype_alpha($s[$i])) {
            if (ctype_lower($s[$i])) {
                $newLetter = ord($s[$i]) + $k;
                if ($newLetter > $endLetter) {
                    $newLetter = $startLetter + ($newLetter - $endLetter - 1) % 26;
                }
            } else {
                $newLetter = ord($s[$i]) + $k;
                if ($newLetter > $endUpperLetter) {
                    $newLetter = $startUpperLetter + ($newLetter - $endUpperLetter - 1) % 26;
                }
            }
            $encryptedString .= chr($newLetter);
        } else {
            $encryptedString .= $s[$i];
        }
    }
    return $encryptedString;
}
