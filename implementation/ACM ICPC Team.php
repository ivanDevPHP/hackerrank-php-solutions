<?php

/*
 * Complete the 'acmTeam' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts STRING_ARRAY topic as parameter.
 */

function acmTeam($topic) {
    $n = count($topic); // Number of attendees
    $m = strlen($topic[0]); // Number of topics (length of binary string)

    $maxTopics = 0;
    $maxTeams = 0;

    // Loop through all possible pairs of attendees
    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            // Combine topics known by attendee i and attendee j using bitwise OR
            $combinedTopics = 0;
            for ($k = 0; $k < $m; $k++) {
                if ($topic[$i][$k] === '1' || $topic[$j][$k] === '1') {
                    $combinedTopics++;
                }
            }

            // Check if this pair knows the maximum number of topics
            if ($combinedTopics > $maxTopics) {
                $maxTopics = $combinedTopics;
                $maxTeams = 1;
            } elseif ($combinedTopics == $maxTopics) {
                $maxTeams++;
            }
        }
    }

    return [$maxTopics, $maxTeams];
}
