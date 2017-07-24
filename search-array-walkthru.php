<?php

// === CURRICULUM EXERCISES ===/
// === STEP #1 ===


$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// === STEP #2 ===
//Create a function that returns TRUE or FALSE if an array value is found. 
//Search for Tina and Bob in $names. Make sure it works as expected.

function isInArray($needle, $haystack)
{
	//array search returns an index - which may be zero that returns false 
	$result = array_search($needle, $haystack);
	
	if($result === false) {
		return false;
	} else {
		return true;
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

function numberOfValuesInCommon($array1, $array2)
{
	$count = 0;
	foreach ($array1 as $value) 
	{
		if(isInArray($value, $array2)) {
			$count++;
		}
	}
	return $count;
}
echo "The number of values that \$names and \$compare have in common is" . numberOfValuesInCommon ($names, $compare) . PHP_EOL;

