<?php


for ($number = 1; $number <= 100; $number++) {

	if (0 == ($number % 3)){
		echo "fizz" . PHP_EOL; 
	}

	if (0 == ($number % 5)){
		print "buzz" . PHP_EOL;
	} 

	if (0 != ($number % 3) || ($number % 5)) {
		 echo "$number" . PHP_EOL;
	}

}