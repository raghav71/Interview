<?php
/*
Developer Comment:
1: Optimized Code
*/

// Original code with optimization
function calculate_square_sum($numbers) {
    $sum = 0;
    foreach ($numbers as $num) {
        $sum += $num * $num;
    }
    return $sum;
}

$values = [1, 3, 5, 9, 15];
$result = calculate_square_sum($values);
echo "Result: $result";



$colors = array("red", "green", "blue", "yellow");
$del_val="blue";
$filtered_colors = array();
/*
foreach ($colors as $color) {
    if ($color != "blue") {
        $filtered_colors[] = $color;
    }
}
*/
function delete_value_fromarray($mainarray, $delete_val){
if (($key = array_search($delete_val, $mainarray)) !== false) {
    unset($mainarray[$key]);
}
return $mainarray;
}
$filtered_colors = delete_value_fromarray($colors, $del_val);
print_r($filtered_colors);



$numbers = array(1, 2, 3, 4, 5);
$sum = 0;
/*foreach ($numbers as $number) {
    $sum += $number;
}
*/

$sum= array_sum($numbers);
echo "The sum is: " . $sum;
?>