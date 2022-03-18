<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
    // Write your code here
    $roundGrades = array();
    for($i = 0; $i < count($grades); $i++){
        //if grade is lower than than 38
        if($grades[$i] < 38){
            array_push($roundGrades, $grades[$i]);
        }else{
            //if the grade is a multipleof 5
            if($grades[$i] % 5 === 0){
                array_push($roundGrades, $grades[$i]);
            }else{
                $nextMultipleOf5 = round(($grades[$i]+5/2)/5)*5;
                
                //If the difference between the grade and the next multiple of 5 is less than 3
                $lessThanThee = (($nextMultipleOf5 - $grades[$i]) < 3) ? true : false;
                
                
                if($lessThanThee ){
                    array_push($roundGrades, $nextMultipleOf5);
                }else{
                    array_push($roundGrades, $grades[$i]);
                }
            }
        } 
        
    }
    
    return $roundGrades;
}
