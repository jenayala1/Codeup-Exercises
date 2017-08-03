<?php

// Write your code here

//#1 - Write a function named isNegative that accepts a number and returns true or false based on whether the input is negative.

function isNegative($input) 
{
	if(!is_numeric($input)) {
		return false;
	}
	return $input < 0; // can also use an if statement for true or false

}
 isNegative(-1); // true
 isNegative(6); // false

//================================
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

///with loop:

	$sum = 0;
	foreach($input as $value) {
		$sum += $value;
	}
	return $sum / count($input);

average([1, 2, 3]) // 2
average([4, 6, 8, 10, 12]) // 8

//================================ 

// $3 Write a function named countOdds that accepts an array of numbers and returns the number of odd numbers in the array.
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
//================================
//#4 Write a function named convertNameToAssociativeArray that accepts a string that contains a first name and last name separated by a space, and returns an associative array with keys of firstName and lastName.

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
//================================
// #5 - Write a function named fiveTo that accepts a number and returns an array of the integers from 5 to (including) the passed number.

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

//================================

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
 //==========================================
// #6 - Write a function named upperCaseLastNames that accepts an array of associative arrays where each associative array has indices firstName and lastName and returns the same array of associative arrays with each last name capitalized

 function upperCaseLastNames($input)
 {
 	if(!is_array($input)) {
 		return false;
 	}
 	foreach ($input as $key => $person) {
 		$person['lastName'] = ucfirst($person['lastName']);
 		$input[$key] = $person;
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
 