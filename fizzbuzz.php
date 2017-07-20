<?php


for ($number = 1; $number <= 100; $number++) {

	if (0 == ($number % 3) && ($number % 5)) {
		echo  "fizzbuzz" . PHP_EOL;
	}

	else if (0 == ($number % 3)){
		echo "fizz" . PHP_EOL; 
	}

	else if (0 == ($number % 5)){
		echo "buzz" . PHP_EOL;
	} 	

	else  {
		echo  "$number" . PHP_EOL;
	}

}

