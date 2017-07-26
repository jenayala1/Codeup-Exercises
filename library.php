<?php

// ===# Make your own PHP library of helpful functions! Make a file called library.php == //

// Write a function called isEven that takes in a variable and returns true or false if the provided input is evenly divisible by two or not.
function isEven($number){

	if (is_numeric($number)) {
		return $number % 2 == 0;
	} else {
		return false;
	}
}
var_dump(isEven(25));
//===============================================================
// - !!! COME BACK TO, NOT EVALUATING THE LETTER !!!
//Write a function called isVowel that returns true or false if the provided input is the letter 'a', 'e', 'i', 'o', or 'u'
function isVowel($input)
{
	if(!is_string($input) && count($input) == 1) {//number of characters
		return false;
	}	
	$input = strtolower($input);

	if($input === 'a' || $input === 'e' || $input === 'i' || $input === 'o' || $input === 'u') {
		return true;
	} else {
		return false;
	}
}
var_dump(isVowel("b")); 

//Write a function called "first" that takes in an argument that could be an array or a string. 
//Return the first character if the argument is a string. 
//Return the first element of the array if the input is an array.
function first($var){
		if(is_string($var)) {
			$result = substr($var, 0, 1);

		} elseif (is_array($var)) {
			$result = $var[0];
		}
	return $result;
}
var_dump(first('Today is Tuesday'));

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
var_dump(second('Today is Tuesday'));

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
var_dump(last(['Today', 'is', 'Tuesday'])); 


//Write a function called "reverse" that takes in an input of either a string or an array. 
// function should return the elements or characters in reverse order.
function reverse($var){
	if(is_string($var)) {
		return strrev($var);
	} 
	if (is_array($var)) {
		return  array_reverse($var);
	}

}
var_dump(reverse('Today', 'is', 'Tuesday'));


//Write a function called "random" that takes in an input that can be either a string or an array. 
//function should return a random element or character from the input.
function random($input)
{
	if(is_string($input)){
		$randomIndex = mt_rand(0, strlen($input) -1);
		return $input[$randomIndex];
	}
	if(is_array($input)){
		$key = $array_rand($input);
		return $input[$key];
	}
}
var_dump(random("Time to Go")); 




