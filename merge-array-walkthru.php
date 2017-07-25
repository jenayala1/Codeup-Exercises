<?php

// === CURRICULUM EXERCISE - INSTRUCTOR SOLUTION ===/
// === STEP #1 ===
//Copy search-arrays.php and rename it merge-arrays.php.


$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// === STEP #2 === 
// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// * == If the arrays have the same value at the same index, then it should only be added once.
// * == If the values differ, then the value from the first array should be added and then the second.
// * == The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().

// === STEP #3 ===
//Test your combine_arrays() function with $names and $compare. 



// === BONUS ===
//You may have noticed that the solution we created will only work when comparing two arrays of the same size. What would you do to make this function work while comparing two arrays of differing sizes? What tradeoffs are involved?// ==========

//SOLUTION #1: Destroys original array

function combine_arrays($arr1, $arr2){
	$outputArray = [];

 	foreach($arr1 as $value) {
 		$arr1Value = array_shift($arr1);
 		$arr2Value = array_shift($arr2);

 		if ($arr1[$value] === $arr2[$value]){
 			array_push($outputArray, $arr1Value);

 		} 	else {
	 		array_push($outputArray, $arr1Value, $arr2Value);
	 	}
 	}
	return $outputArray;
}

print_r(combine_arrays($names, $compare));


//SOLUTION #2:
function combine_arrays($arr1, $arr2){
	$outputArray = [];

 	foreach($arr1 as $key => $value) {
 		$arr1Value = array_shift($arr1);
 		$arr2Value = array_shift($arr2);

 		if ($value === $arr2[$key]){
 			array_push($outputArray, $value);

 		} 	else {
	 		array_push($outputArray, $value, $arr2Value[$key]);
	 	}
 	}
	return $outputArray;
}

print_r(combine_arrays($names, $compare));


///BONUS SOLUTION:

function combine_arrays_bonus($arr1, $arr2){
	$outputArray = [];


	//shortest array is always $arr1:
	if (count($arr1) > count($arr2)) {
		$oldArr1 = $arr1;
		$arr1 = $arr2;
		$arr2 = $oldArr1;	
	}

 	foreach($arr1 as $value) {
 		$arr1Value = array_shift($arr1);
 		$arr2Value = array_shift($arr2);

 		if ($arr1[$value] === $arr2[$value]){
 			array_push($outputArray, $arr1Value);

 		} 	else {
	 		array_push($outputArray, $arr1Value, $arr2Value);
	 	}
 	}
	return $outputArray;
}

print_r(combine_arrays($names, $compare));




