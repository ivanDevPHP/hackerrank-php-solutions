<?php

/*
 * Complete the 'migratoryBirds' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function migratoryBirds($arr) {
    // Write your code here
    $countArr = array_count_values($arr);
    ksort($countArr);
    return (array_search(max($countArr), $countArr));

}
