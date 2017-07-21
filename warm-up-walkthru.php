<?php

$testArray = [2, 1, -5, "bob"];
$result = 0;

foreach($testArray as $element){
	//Inside loop if element is numeric
	if (is_numeric($element)) {
		// convert negative to positive:
		if($element < 0) {
			$element = abs($element);
		}
		if($element % 2 == 0) {
			$result *= $element;
		} else {
			$result += $element;
		}
	}
	

}//end of loop

echo $result . PHP_EOL; //echo the result