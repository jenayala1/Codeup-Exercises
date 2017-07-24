<?php

// TODO: Create your inspect() function here
$var = get_defined_vars();

function inspect($var)
{

	if (is_null($var)) {
		return "The value is null" . PHP_EOL;
	} elseif (is_array($var)) {
		if(empty($var)) {
			return "The value is an empty array." . PHP_EOL;
		} else{
			return "The value is an array " . PHP_EOL;
		}
		
	} elseif (is_bool($var)){
		if(is_true($var)) {
			return "True" . PHP_EOL;
		} else
		return "Is False" . PHP_EOL; 

	} elseif (is_string($var)) {
		if(empty($var)){
			return "The string is empty" . PHP_EOL;
		} else {

		}
	}
}
echo inpect($var) . PHP_EOL;

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

echo 'Inspecting $num2:' . PHP_EOL;

echo 'Inspecting $num3:' . PHP_EOL;

echo 'Inspecting $num4:' . PHP_EOL;

echo 'Inspecting $null:' . PHP_EOL;

echo 'Inspecting $bool1' . PHP_EOL;

echo 'Inspecting $bool2' . PHP_EOL;

echo 'Inspecting $string1' . PHP_EOL;

echo 'Inspecting $string2' . PHP_EOL;

echo 'Inspecting $array1' . PHP_EOL;

echo 'Inspecting $array2' . PHP_EOL;
