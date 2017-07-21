<?php

// Foreach with keys syntax:
//$key - similar to index

//foreach //(things)



// Lesson Example:
// $numbers = [1, 2, 3, 4, 5];

// foreach ($numbers as $key => $value) {
//     echo "\$value has a key of {$key} and a value of {$value}\n";
// }

//Associative arrays yield their keys instead of index number.

$me = [

	"firstName" => 'Justin',
	"yearsOld" => 31,
	"hairColor" => "brown",
	"isOld" => false
];

foreach ($me as $key => $value) {
 	echo "{$key} = {$value}" .PHP_EOL; //curly braces necessary for double quotes & arrays within arrays
// }

//Multidimensional Arrays:
$students = array(
    array('name' => 'Virginia Potts', 'age' => 29),
    array('name' => 'Elon Musk', 'age' => 42),
    array('name' => 'Rasmus Lerdorf', 'age' => 45),
    array('name' => 'Marissa Mayer', 'age' => 38)
);
//echo the second student's age:
echo $students [1]['age'];

//echo the key:
echo $students;

//echo all the students names & Ages with foreach loop:
foreach ($students as $student) {
    echo "{$student['name']} is {$student['age']} years old.\n"; //array within an array
}

//Alternative for each:
foreach ($students as $student) {
	echo "======================" . PHP_EOL;

	foreach($student as $key => $attribute){
		echo "{$key} is {$attribute}" . PHP_EOL;
	}
  
}









