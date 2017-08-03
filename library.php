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

//Write a function named isNegative that accepts a number and returns true or false based on whether the input is negative.
function isNegative($input) 
{
	if(!is_numeric($input)) {
		return false;
	}
	return $input < 0; // can also use an if statement for true or false

}
 isNegative(-1); // true
 isNegative(6); // false

//================================================
// #2 - Write a function named average that accepts an array of numbers and returns the average of those numbers
 function average($input)
{
	if(!is_array($input)) {
		return false;
	}
	foreach($input as $value) {
		if(!is_numeric($value)) {
			return false;
		}
	}

	return array_sum($input) / count($input);
}

average([1, 2, 3]) // 2
average([4, 6, 8, 10, 12]) // 8

//===================================

// Write a function named countOdds that accepts an array of numbers and returns the number of odd numbers in the array.
function countOdds($input)
{
	$count = 0;
	if(is_array($input)){
		return false;
	}
	foreach($input as $value) {
		if(is_numeric($value) && $value % 2 !== 0) {
			$count++;
		}
	}

	return $count;
}
 countOdds([1, 2, 3]) // 2
 countOdds([4, 6, 8, 10]) // 0
 countOdds([1, 2, 1, 1]) // 3

 //====================================================
//Write a function named convertNameToAssociativeArray that accepts a string that contains a first name and last name separated by a space, and returns an associative array with keys of firstName and lastName.

function convertNameToAssociativeArray($input)
{
	if(!is_string($input)) {
		return false;
	}

	$inputArray = explode(",", $input);
	$outputArray = [];
	$outputArray['firstName'] = $inputArray[0];
	$outputArray['lastName'] = $inputArray[1];

	return $outputArray;
}
 convertNameToAssociativeArray('Harry Potter') // ['firstName' => 'Harry', 'lastName' => 'Potter']
 convertNameToAssociativeArray('Ron Weasley') // ['firstName' => 'Ron', 'lastName' => 'Weasley']
//==================================================================

//Write a function named fiveTo that accepts a number and returns an array of the integers from 5 to (including) the passed number.

function fiveTo($input) 
{
	if(!is_numeric($input)) {
		return false;
	}
	$outputArray = [];

	if($i >= 5) {
		for($i = 5; $i <= $input; $i++){
			$outputArray[] = $i;
		}
	}
	if ($input < 5) {
		for($i = 5; $i >= $input; $i --) {
			$outputArray[] = $i;
		}
	}
	return $outputArray;
}

//SIMPLER SOLUTION:
function fiveTo($input) 
{
	if(!is_numeric($input)) {
		return false;
	}
	return range(5, $input);
}	

 fiveTo(10) // [5, 6, 7, 8, 9, 10]
 fiveTo(6) // [5, 6]
 fiveTo(5) // [5]
 fiveTo(-2) // [5, 4, 3, 2, 1, 0, -1, -2]

//================================================================

//Write a function named upperCaseLastNames that accepts an array of associative arrays where each associative array has indices firstName and lastName and returns the same array of associative arrays with each last name capitalized

function upperCaseLastNames($input)
 {
 	if(!is_array($input)) {
 		return false;
 	}
 	foreach ($input as $key => $person) {
 		$person['lastName'] = ucfirst($person['lastName']); 
 		$input[$key] = $person; //reassigns the input key to the value of $person
 	}
 	return $input;
 }

$names = [
     ['firstName' => 'Harry', 'lastName' => 'Potter'],
     ['firstName' => 'Ron', 'lastName' => 'weasley'],
     ['firstName' => 'Hermione', 'lastName' => 'granger'],
 ];
 upperCaseLastNames(names);
 
 [
     ['firstName' => 'Harry', 'lastName' => 'Potter'],
     ['firstName' => 'Ron', 'lastName' => 'Weasley'],
     ['firstName' => 'Hermione', 'lastName' => 'Granger'],
 ]


//





