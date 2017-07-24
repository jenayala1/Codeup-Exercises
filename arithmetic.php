<?php

$a = 4;
$b = 25;

function inputsAreNumeric($a, $b) {
// ====== // Add code here // =========== //
	if (is_numeric($a) && is_numeric($b)) {
		echo true . PHP_EOL;
	} else {
		echo false . PHP_EOL;
	}
}

function add($a, $b) {
// ====== // Add code here // =========== //
  	if (is_numeric($a) && is_numeric($b)) {
  		return $a + $b;
		
	} else {
		return "Input must be numeric";
	
	}
}
echo add($a, $b);

function subtract($a, $b) {
// ====== // Add code here // =========== //
	if (is_numeric($a) && is_numeric($b)) {
  		return $a - $b;
		echo $a - $b . PHP_EOL;
	} else {
		return "Inputs must be numeric";
		echo "Inputs must be numeric" . PHP_EOL;
	}
}

function multiply($a, $b) {
// ====== // Add code here // =========== //
	if (is_numeric($a) && is_numeric($b)) {
	  		return $a * $b;
			echo $a * $b . PHP_EOL;
	} 	else {
			return "Inputs must be numeric";
			echo "Inputs must be numeric" . PHP_EOL;
		}
}

function divide($a, $b) {
// ====== // Add code here // =========== //
	if (is_numeric($a) && is_numeric($b)) {
	  		return $a / $b;
			echo $a / $b . PHP_EOL;
	} 	else {
			return "Inputs must be numeric";
			echo "Inputs must be numeric" . PHP_EOL;
		}

}

// Add code to test your functions here




