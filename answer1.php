<?php

/*
Developer Comment:
1: Now Fixed All Error
*/

// Function to calculate the factorial of a number
function calculate_factorial_of_a_number($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * calculate_factorial_of_a_number($n - 1);
}

$number = 5;
$result = calculate_factorial_of_a_number($number);
echo "The factorial of $number is: $result";

// Display a message if the result is greater than 100
if ($result > 100){ echo "Wow, that's a big factorial number!"; }



// Function to calculate the average of an array of numbers
function calculate_average_value($numbers) {
    $sum = 0;
    $count = 0;

    foreach ($numbers as $number) {
        $sum += $number;
        $count++;
    }

    return $count>0 ? ($sum / $count) : $count;
}

$numbers = [10, 20, 30, 40, 50];
$result = calculate_average_value($numbers);
echo "The average is: $result";

$numbers2 = [];
$result = calculate_average_value($numbers2);
echo "The average is: $result";



$firstName = "Nirmal";
$lastName = "Enterprises";
$fullName = $firstName.' '.$lastName;
echo "Full Name: $fullName";
?>