<?php

// TODO: Create your inspect() function here

function inspect($var)
{
	if (is_null($var)) {
		return "The value is null" . PHP_EOL;
	} elseif (is_array($var)) {
		if (empty($var)) {
			return "$var is an empty array." . PHP_EOL;
		} else {
			return "$var is an array " . PHP_EOL;
			print_r ($var) . PHP_EOL;
		}

	} elseif (is_bool($var)){
		if ($var == true) {
			return "$var is True" . PHP_EOL;
		} else
		return "$var is False" . PHP_EOL; 

	} elseif (is_string($var)) {
		if (empty($var)){
			return "The string is empty" . PHP_EOL;
		} else {
			return "$var is a string" . PHP_EOL;
		}
	} elseif (is_numeric($var)) {
		if (is_int($var)){
			return "The integer is $var" . PHP_EOL;
		} elseif (is_float($var)) {
			return "The floatval is $var" . PHP_EOL;
		}
		
	}
}


// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value


echo 'Inspecting $num1:' . PHP_EOL;
echo inspect($num1) . PHP_EOL;

echo 'Inspecting $num2:' . PHP_EOL;
echo inspect($num2) . PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;
echo inspect($num3) . PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;
echo inspect($num4) . PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;
echo inspect($null) . PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;
echo inspect($bool1) . PHP_EOL;

echo 'Inspecting $bool2' . PHP_EOL;
echo inspect($bool2) . PHP_EOL;

echo 'Inspecting $string1' . PHP_EOL;
echo inspect($string1) . PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;
echo inspect($string2) . PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;
echo inspect($array1) . PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;
echo inspect($array2) . PHP_EOL;

///bonus
// Create a function that takes in a string and echos out how many occurrences of each alpha-numeric character is present in the string
//EXAMPLE:
//The string "aabb131"
//should yield the following output:
//This string contains...
// - (2) "a" characters
// - (2) "b" characters
// - 2) "1" characters
// - (1) "3" characters
