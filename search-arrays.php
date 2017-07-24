<?php

// === CURRICULUM EXERCISES ===/
// === STEP #1 ===


$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];




// === STEP #2 ===
//Create a function that returns TRUE or FALSE if an array value is found. 
//Search for Tina and Bob in $names. Make sure it works as expected.
$result = array_seach($needle, $names);

function isInArray($result, $names)
{
	if ($result == true) {
		return true;
	} else {
		return false;
	}
}
var_dump($result);
echo isInArray($query);

// === STEP #3 ===
//Create a function to compare 2 arrays that returns the number of values in common between the arrays. 
//Use the 2 example arrays and make sure your solution uses array_search().
