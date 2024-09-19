<?php

/*
 * Complete the getMoneySpent function below.
 */
function getMoneySpent($keyboards, $drives, $b) {
    /*
     * Write your code here.
     */
     
    $expensivePurchased = -1; // Initialize to -1, meaning no valid purchase found

    // Loop through keyboards
    for ($i = 0; $i < count($keyboards); $i++) {
        // Loop through drives
        for ($q = 0; $q < count($drives); $q++) {
            $totalCost = $keyboards[$i] + $drives[$q]; // Calculate the total cost

            // Check if the total cost is within the budget
            if ($totalCost <= $b && $totalCost > $expensivePurchased) {
                $expensivePurchased = $totalCost; // Update the max cost
            }
        }
    }

    return $expensivePurchased;

}
