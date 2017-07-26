<?php

// ===# Make your own PHP library of helpful functions! Make a file called library.php == //

// Write a function called isEven that takes in a variable and returns true or false if the provided input is evenly divisible by two or not.
function isEven($number){

	if ($number % 2 == 0) {
		return "true";
	} else {
		return "false";
	}
}
echo isEven(25) . PHP_EOL;
//===============================================================
// - !!! COME BACK TO, NOT EVALUATING THE LETTER !!!
//Write a function called isVowel that returns true or false if the provided input is the letter 'a', 'e', 'i', 'o', or 'u'
// function isVowel($letters){
// 	$letters = $array('a', 'e', 'i', 'o', 'u');
// 		if ($letters == true){
// 			return "true";
// 		} else {
// 			return "false";
// 		}	
// }
// echo isVowel("o") . PHP_EOL;

//Write a function called "first" that takes in an argument that could be an array or a string. 
//Return the first character if the argument is a string. 
//Return the first element of the array if the input is an array.
function first($var){
		if(is_string($var)) {
			$result= substr($var, 0, 1);

		} elseif (is_array($var)) {
			$result = $var[0];
		}
	return $result;
}
echo first('Today is Tuesday') . PHP_EOL;

//Write a function called "second" that takes in input that could be an array or a string. 
//The function should return the second character or element of the input.
function second($var){
	if(is_string($var)) {
		$result = substr($var, 1, 1);

		} elseif (is_array($var)) {
			$result = $var[1];
		}
return $result;
}
echo second('Today is Tuesday') . PHP_EOL;

//Write a function called "last" that takes in an input that could be an array or a string. 
//function should return the last character or element of the input.
function last($var){
	if(is_string($var)) {
			$result = substr($var, -1, 1);

			} elseif (is_array($var)) {
				$result = end($var);
			}
return $result;
}
echo last(['Today', 'is', 'Tuesday']) . PHP_EOL;


//Write a function called "reverse" that takes in an input of either a string or an array. 
// function should return the elements or characters in reverse order.
function reverse($var){
	if(is_string($var)) {
			$array = explode(', ', $var);
			$result = rsort($array);

			} elseif (is_array($var)) {
				$result = rsort($var);
			}

return $result;
}
echo reverse('Today', 'is', 'Tuesday') . PHP_EOL;


//Write a function called "random" that takes in an input that can be either a string or an array. 
//function should return a random element or character from the input.
function random($var){
	if(is_string($var)) {
		$array = explode(', ', $var);
		$result = rsort($array);

		} elseif (is_array($var)) {
	
			$result = shuffle($var);
		}

return $result;
}
echo reverse('Today', 'is', 'Tuesday') . PHP_EOL;




