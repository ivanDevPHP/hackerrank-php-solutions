<?php
function minimumNumber($n, $password) {
    // Return the minimum number of characters to make the password strong
    $addCar = 0;
    
    if(!preg_match('/\p{Lu}/u', $password)){
      $addCar ++;
    }
    if(!preg_match('/\p{Ll}/u', $password)){
      $addCar ++;
    }
    if(!preg_match('/\p{N}/u', $password)){
      $addCar ++;
    }
    if(!preg_match('/[-!@#$%^&*()+]/', $password)){
        $addCar ++;
    }
    
    if($n + $addCar < 6){
        $addCar += 6 - ($n + $addCar);
    }
    
    return $addCar;
}