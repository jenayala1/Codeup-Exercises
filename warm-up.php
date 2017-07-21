<?php


$testArray = [2, 10, 52, 17, 20, -15, -24, 1, -5, "bob"];
$result = 0;

//Start calculations with zero & final result echoed after each array element calculation is performed

//#1 - Convert negative numbers to positive numbers
//#2 - No calculation for non-numeric elements
//#3 - Odd numbers will be added to the result
//#4 - Even numbers multiplied to the result


foreach ($testArray as $item){
	if(is_numeric($item)){
		} if($element < 0) {
			$element = abs($element);
		
		} if ($item % 2 == 0) {
		 	 $result *= $item;
		 	 
		} else ($item % 2 == 0) {
		 	$result += $item;
		}
	}
}		
echo "$result" . PHP_EOL;
	
	 
