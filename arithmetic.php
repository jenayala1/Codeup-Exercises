<?php

$a = 4;
$b = 25;

function inputsAreNumeric($a, $b) {
// ====== // Add code here // =========== //
	if (is_numeric($a) && is_numeric($b)) {
		echo true;
	} else {
		echo false;
	}
}

function add($a, $b) {
// ====== // Add code here // =========== //
  	if (is_numeric($a) && is_numeric($b)) {
  		return $a + $b;
		echo $a + $b . PHP_EOL;
	} else {
		return "Input must be numeric";
		echo "Inputs must be numeric" . PHP_EOL;
	}
}


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




