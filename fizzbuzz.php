<?php

$number = 1;


for ($number = 1; $number <= 100; $number++) {

	if ($number == ($number % 3)){
		echo "fizz"; 
	}

	if ($number == ($number % 5)){
		echo "buzz";
	} 
	else {
		 echo "$number" . PHP_EOL;
	}

}