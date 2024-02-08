<?php

/*
Developer Comment:
1: Sum of Even number array and prime number array.
*/


$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19];

//Code For Even

$even_array=array();

// Create Even Array
foreach($numbers as $number){
	if($number%2==0){
	$even_array[]=$number;	
	}
}
print_r($even_array);
echo "<br>";
echo "Sum of Even Array: ". array_sum($even_array);
echo "<br>";


//Code For Prime

function check_prime_number($number){
    if ($number == 1)
    return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    }
    return 1;
}



$prime_array=array();

// Create Even Array
foreach($numbers as $number){
	if(check_prime_number($number)){
	$prime_array[]=$number;	
	}
}

print_r($prime_array);
echo "<br>";
echo "Sum of Prime Array: ". array_sum($prime_array);

?>

<script>
var numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19];

// Code for Even



var even_arr=[];
var sum_even=0;
for(let i=0; i<numbers.length; i++){
	if(numbers[i]%2==0){
		even_arr.push(numbers[i]);
		sum_even +=numbers[i]
	}
}

console.log(even_arr);
console.log(sum_even);


//Code for prime

function check_prime_numner(number){
	if (number == 1)
    return 0;
    for (let i = 2; i <= number/2; i++){
        if (number % i == 0)
            return 0;
    }
    return 1;
}

var prime_arr=[];
var sum_prime=0;
for(let i=0; i<numbers.length; i++){
	if(check_prime_numner(numbers[i])){
		prime_arr.push(numbers[i]);
		sum_prime +=numbers[i]
	}
}

console.log(prime_arr);
console.log(sum_prime);

</script>
