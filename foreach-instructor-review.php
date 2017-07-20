<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing){
	if(is_integer($thing)) {
		echo "integer";
	} else if (is_float($thing)){
		echo "$thing is a float";
	} else if (is_bool($thing)) {
		echo "$thing is a boolean";
	} else if (is_array($thing)) {
		echo "$thing is an array";
	} else if (is_null($thing)) {
		echo "$thing is null";

}

foreach ($things as $thing){
	if 	(is_scalar($thing)){
		echo "$thing" . PHP_EOL;
	}
}

foreach ($things as $thing){
	if (is_array($thing)) {
		foreach ($thing as $element){
			echo $element . "\t";
		}
	
	} else {
		echo "$thing" . PHP_EOL;
	}
		
}