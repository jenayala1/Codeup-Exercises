<?php

$result = 0;
$testArray = [2, 10, 52, 17, 20, -15, -24, 1, -5, "bob"];


//Start calculations with zero & final result echoed after each array element calculation is performed

//#1 - Convert negative numbers to positive numbers
//#2 - No calculation for non-numeric elements
//#3 - Odd numbers will be added to the result
//#4 - Even numbers multiplied to the result


foreach ($testArray as $item){
	if (is_int($item)) {
		abs($item) . PHP_EOL;

		} if ($result == ($item % 2) * $result)  {
		 	echo "$result" . PHP_EOL;
		}
		else if ($result != ($item % 2) + $result) {
		 	echo "$result" . PHP_EOL;
		}
		else {
			echo "$result" . PHP_EOL;
		}
}	
	



	
	 
