<?php

/*
 * Complete the 'howManyGames' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER p
 *  2. INTEGER d
 *  3. INTEGER m
 *  4. INTEGER s
 */

function howManyGames($p, $d, $m, $s) {
    // Initialize the total amount of money spent on games
    $moneySpent = 0;
    
    // Initialize the number of games bought
    $gamesAmount = 0;
    
    // Start with the price of the first game
    $price = $p;
    
    // Continue buying games while the total money spent is within the available budget
    do {
        // Add the price of the current game to the total money spent
        $moneySpent += $price;
        
        // Increment the number of games bought
        $gamesAmount++;
        
        // Update the price for the next game:
        // The next game will cost the current price minus the discount (d),
        // but the price cannot go lower than the minimum price (m),
        // so use the max() function to ensure it doesn't drop below m.
        $price = max($m, $price - $d);
        
    // Repeat the loop as long as the total money spent is less than or equal to the budget (s)
    } while($s >= $moneySpent);
    
    // Return the number of games bought, subtracting 1 because the last game counted exceeds the budget
    return $gamesAmount - 1;
}
