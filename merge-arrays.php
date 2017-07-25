<?php

// === CURRICULUM EXERCISES ===/
// === STEP #1 ===
//Copy search-arrays.php and rename it merge-arrays.php.


$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// === STEP #2 === 
// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// * == If the arrays have the same value at the same index, then it should only be added once.
// * == If the values differ, then the value from the first array should be added and then the second.
// * == The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().

$newArray = [];
function combineArrays($name, $compare)
{
 	foreach($names as $value)
 	{

 		if ($names[$value] === $compare[$value]){
 			array_push($newArray, $value);

 		} 	else {
	 		array_push($newArray, $names[$value]);
	 		array_push($newArray, $compare[$value]);
	 	}
 	}
	return $newArray;
}

print_r(combineArrays($name, $compare));


// === STEP #3 ===
//Test your combine_arrays() function with $names and $compare. 



// === BONUS ===
//You may have noticed that the solution we created will only work when comparing two arrays of the same size. What would you do to make this function work while comparing two arrays of differing sizes? What tradeoffs are involved?// ==========





