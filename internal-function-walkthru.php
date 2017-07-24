<?php

//CONDITIONS TO CHECK:
// int
// float/double
// NULL
//Array
	//empty
	//not empty array
//Boolean
	//true
	//false
//String
	//empty string
	//not empty string


//INSTRUCTOR SOLUTION #1
// TODO: Create your inspect() function here
$message = "";

function inspect($data);

if (is_int($data)) {
	$message = "The integer is $data";
	} elseif(is_double($data)){
		$message = "The double is $data";
	} elseif (is_array($data)) {
		if (empty($data)) {
			$message = "The value is an empty array"
		}
	}
}
return $message;

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

//=================================================================//
//Instructor Solution #2
// TODO: Create your inspect() function here



function inspect($data);
	$message = "";
	$type = gettype($data);

	switch ($type) {

		case 'NULL':  
			$message = 'The value is NULL';
			break;
			
		
		case {

		}

	return $message;

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


