<?php

// === CURRICULUM EXERCISES ===/
// === STEP #1 ===

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// === STEP #2 ===
//Create a function that returns TRUE or FALSE if an array value is found. 
//Search for Tina and Bob in $names. Make sure it works as expected.


function isInArray($var, $names)	
{
	$result = array_seach($var, $names);
	
	if ($result === true) {
		return true;
	} else {
		return false;
	}
}

if(isInArray('Tina', $names)) {
	echo 'Tina is in the array' . PHP_EOL;
} else {
	echo "Tina is not in the array" .PHP_EOL;
}

if(isInArray('Bob', $names)) {
	echo 'Bob is in the array' . PHP_EOL;
} else {
	echo "Bob is not in the array" .PHP_EOL;
}

// === STEP #3 ===
//Create a function to compare 2 arrays that returns the number of values in common between the arrays. 
//Use the 2 example arrays and make sure your solution uses array_search().
