
<?php


/// Arithmetic Functions
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


//Break/Continue:

//#1 - Create a for loop that shows all even numbers between 1 and 100 using continue.
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        continue;
    }
    echo "$i" . PHP_EOL;
}


//#2 - Create another for loop that counts from 1 to 100, but stops after 10 using break
for ($i = 1; $i <= 100; $i++) {
    
    if ($i == 11) {
        break;
    }
    echo $i . PHP_EOL;
}
//=======================================================
//DO WHILE:

//EXERCISE #1: Create a do-while loop that will count by 2's starting with 0 and ending at 100. 
//Follow each number with a newline
$a = 0;

do {
	echo $a .PHP_EOL;
	$a += 2;
	
} while ($a <= 100);


//EXERCISE #2: Alter your loop to count backwards by 5's from 100 to -10
$a = 100;
do {
	echo $a .PHP_EOL;
	$a -= 5;
	
} while ($a >= -10);

//EXERCISE #3: Create a do-while loop that starts at 2, and displays the result $a * $a on each line while $a is less than 1,000,000. Output should equal:
$a = 2;

do {
	echo $a .PHP_EOL;
	$a *= $a;
	
} while ($a < 1000000);

// FIZZBUZZ: Write a program that prints the numbers from 1 to 100. 
//But for multiples of three print “Fizz” instead of the number and for the multiples of five print “Buzz”. 
//For numbers which are multiples of both three and five print “FizzBuzz”.
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


for (){} // contains: initialization, condition to check, & expression to evaluate(incement usually)

$a = 1; //initialization
while ($a <= 5) //the condition
	echo "\$a has a value of {$a}\n";
	$a++; //increment
}

//while loop:
for ($a = 1; $a <=5; $a++) {
	echo "\$a has a value of {$a}\n";
}



///FOR EACH LOOP
//count performs the same function as .length in JS
//EXAMPLE: 

$numbers = ['zero', 'one', 'two', 'three', 'four', 'five'];

for ($i = 0; $i < count($numbers); $i++) {
    echo "\$numbers has an element with a value of {$numbers[$i]}\n";
}

//REWRITE in FOR EACH: ("as" identifies the array index items )
foreach ($numbers as $number) {
	echo 'the number is: ' . $number . "!" .PHP_EOL;
}

$animalTypes = array('dogs', 'cats', 'birds', 'narwhals');

foreach ($animalTypes as $animalType){
	echo 'the animal type is: ' .$animalType . '!' . PHP_EOL;
}
//===========================================================

// FOR WITH FWRITE:

fwrite(STDOUT, "Please enter a starting number: ");
$startingNumber = trim(fgets(STDIN));
if (! is_numeric($startingNumber)){
		echo "That is not a number " . PHP_EOL;
		exit;
}

fwrite(STDOUT, "Please enter an ending number: ");
$endingNumber = trim(fgets(STDIN));
if (! is_numeric($endingNumber)){
		echo "That is not a number " . PHP_EOL;
		exit;
	}

fwrite(STDOUT, "Please enter increment: ");
$increment = trim(fgets(STDIN));
if (! is_numeric($increment)){
		echo "That is not a number " . PHP_EOL;
		exit;
	}

if ($increment == "") {
	$increment = 1;
}


for ($i = $startingNumber; $i < $endingNumber; $i+=$increment){
	echo $i . PHP_EOL;

}
//=================================================================

//FOR EACH(BOOKS EXERCISE):
$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    ),
      'Lord of the Rings' => array(
        'published' => 1968,
        'author' => 'J. R. R. Tolkien',
        'pages' => 1178
    )
);

foreach($books as $key => $book) {

	echo "======================" . PHP_EOL;
	
	foreach($book as $key => $attribute) {
	 	if ($book['published'] > 1950){
	 		echo "$key" . PHP_EOL;
	 		echo "{$key}: {$attribute}" . PHP_EOL;
	 	}
	}

//step #3
foreach($books as $key => $book) {
	if ($book['published'] > 1950){
		echo "$key" . PHP_EOL;
	}	
	
		foreach($book as $key => $attribute) {
	 		echo "{$key}: {$attribute}" . PHP_EOL;
	 	}
}
echo "======================" . PHP_EOL;

//========================================================

//FOR EACH:

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
//=========================================

//FUNCTIONS:
function caseChange($firstName, $lastName) {
	if(is_string($firstName) && is_string($lastName)) {
		return "Hello" . " " . ucfirst($firstName) . " " . ucfirst($lastName) . "!" .PHP_EOL;
	}
	else {
		return "Two valid names not given" . PHP_EOL;
	}
}

echo caseChange('Jennifer', 2);

//Instructor Solution:
function makeTitleCase($str)
{
	return ucfirst(strtolower($str));
}
echo makeTitleCase("aBc");

function greeting($firstName, $lastName)
{
	$output = "";

	$output = "$firstName $lastName";

	if (is_string($firstName) && is_string($lastName)) {
		$output = "Hello, $firstName $lastName !";
	} else {
		$output = "Sorry two valid names were not given";
	}
	return $output;
}
//===========================================================

// IF AND OR:

$x = 0;
$y = 5;
$z = 10;

// TODO:
If ($x < $y && $y < $z){ 
	echo "{$x} < {$y} < {$z}\n";
}

// TODO:
If (0 < $x || $x < 10) {
	echo "0 is less than {$x} OR {$x} is less than 10";
}
// then echo the result as a sentence "0 is less than {$x} OR {$x} is less than 10".

// TODO:
// repeat the if statement for $y and $z.
if (0 < $y || $y < 10) {
	echo "0 is less than {y} OR {y} is less than 10";
}

if (0 < $z || $z < 10) {
	echo "0 is less than {z} OR {z} is less than 10";
}

// TODO:
// If 0 is less than $x AND $x is less than 10
// then echo the result as a sentence "0 is less than {$x} AND {$x} is less than 10".
if (0 < $x && $x <10) {
	echo "0 is less than {$x} AND {$x} is less than 10";
}

// TODO:
// repeat the if statement for $y and $z.
if (0 < $y && $y <10) {
	echo "0 is less than {$y} AND {$y} is less than 10";
}

if (0 < $z && $z <10) {
	echo "0 is less than {$z} AND {$z} is less than 10";
}

//===================================================================

// IF ELSE:
$a = 5;
$b = 10;
$c = '10';

// TODO: Shorten these two if statements to a single if/else
// if ($a < $b) {
//     echo "$a is less than $b\n";
// }
// if ($a >= $b) {
//     echo "$a is greater than or equal to $b\n";
// }

echo $a < $b ? "$a is less than $b\n" : "$a is greater than or equal to $b\n";

// TODO: Shorten these two if statements to a single if/else
// if ($b < $c) {
//     echo "$b is less than $c\n";
// }
// if ($b >= $c) {
//     echo "$b is greater than or equal to $c\n";
// }

echo $b < $c ? "$b is less than $c\n" : "$b is greater than or equal to $c\n";

// TODO:
// combine the next 3 conditionals into one
// if/elseif/else block that checks in order for:
// identical, equal, not equal/identical
if ($b === $c) {
    echo "$b is identical to $c\n";
}
elseif ($b == $c) {
    echo "$b is equal to $c\n";
}
//======================================================================

//INTERNAL FUNCTIONS:

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

//=============================================

//MERGE ARRAYS:

// === CURRICULUM EXERCISE - INSTRUCTOR SOLUTION ===/
// === STEP #1 ===
//Copy search-arrays.php and rename it merge-arrays.php.


$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// === STEP #2 === 
// Write a function called combine_arrays() that will take in two array values as parameters and return a new array with values from both.

// * == If the arrays have the same value at the same index, then it should only be added once.
// * == If the values differ, then the value from the first array should be added and then the second.
// * == The function will need to use at least two of the array functions we discussed: array_shift(), array_unshift(), array_push(), and array_pop().

// === STEP #3 ===
//Test your combine_arrays() function with $names and $compare. 



// === BONUS ===
//You may have noticed that the solution we created will only work when comparing two arrays of the same size. What would you do to make this function work while comparing two arrays of differing sizes? What tradeoffs are involved?// ==========

//SOLUTION #1: Destroys original array

function combine_arrays($arr1, $arr2){
	$outputArray = [];

 	foreach($arr1 as $value) {
 		$arr1Value = array_shift($arr1);
 		$arr2Value = array_shift($arr2);

 		if ($arr1[$value] === $arr2[$value]){
 			array_push($outputArray, $arr1Value);

 		} 	else {
	 		array_push($outputArray, $arr1Value, $arr2Value);
	 	}
 	}
	return $outputArray;
}

print_r(combine_arrays($names, $compare));


//SOLUTION #2:
function combine_arrays($arr1, $arr2){
	$outputArray = [];

 	foreach($arr1 as $key => $value) {
 		$arr1Value = array_shift($arr1);
 		$arr2Value = array_shift($arr2);

 		if ($value === $arr2[$key]){
 			array_push($outputArray, $value);

 		} 	else {
	 		array_push($outputArray, $value, $arr2Value[$key]);
	 	}
 	}
	return $outputArray;
}

print_r(combine_arrays($names, $compare));


///BONUS SOLUTION:
function combine_arrays_bonus($arr1, $arr2){
	$outputArray = [];


	//shortest array is always $arr1:
	if (count($arr1) > count($arr2)) {
		$oldArr1 = $arr1;
		$arr1 = $arr2;
		$arr2 = $oldArr1;	
	}

 	foreach($arr1 as $value) {
 		$arr1Value = array_shift($arr1);
 		$arr2Value = array_shift($arr2);

 		if ($arr1[$value] === $arr2[$value]){
 			array_push($outputArray, $arr1Value);

 		} 	else {
	 		array_push($outputArray, $arr1Value, $arr2Value);
	 	}
 	}
	return $outputArray;
}

print_r(combine_arrays($names, $compare));
//===================================================================

//PUSH/POP:

//LESSON NOTES - PHP ARRAY FUNCTIONS: PUSH/POP 

array_push()  //Push one or more elements onto the end of an array
array_pop()  //Pop the element off the end of an array
array_shift()  //Shift an element off the beginning of an array
array_unshift() //Prepend one or more elements to the beginning of an array

$foods = [
    'fruit' => 'apple',
    'meat' => 'chicken',
    'cheese' => 'feta',
    'dessert' => 'key lime pie',
    'veggie' => 'zucchini',
    'bread' => 'honey oat bread'
];

//array_shift()
$keepsTheDocsAway = array_shift($foods);
echo $keepsTheDocsAway;

print_r($foods);

//array_pop() remove from end of array
$carbs = array_pop($foods);
echo $carbs . PHP_EOL;

print_r($foods);

//array_unshift() - adding a new element
array_unshift($foods, 'smarties'); //can't control associative keys
print_r($foods);

//alternative solution to add another element to array:
$prependArray = ['candy' => 'smarties']; //adding the key & value by specific order - in this case-beginning of the list
$foods = $prependArray + $foods; 
print_r($foods);

//alternative solution to add another key & value
$prependArray = ['candy' => 'smarties']; 
$foods += $prependArray; 
print_r($foods);

//array push - if value doesn't matter when adding to the array
array_push($foods, 'honey oat bread'); //will just add as index [0], does not affect associative keys
print_r($foods);


//array push example #2
$appendArray = ['dairy' => "milk"];
$foods = $foods + appendArray;
//or: $foods += $appendArray;

print_r($foods);

//=====================================================================

// SEARCH ARRAYS:

// === CURRICULUM EXERCISES ===/
// === STEP #1 ===


$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


// === STEP #2 ===
//Create a function that returns TRUE or FALSE if an array value is found. 
//Search for Tina and Bob in $names. Make sure it works as expected.

function isInArray($needle, $haystack)
{
	//array search returns an index - which may be zero that returns false 
	$result = array_search($needle, $haystack);
	
	if($result === false) {
		return false;
	} else {
		return true;
	}
}
if(isInArray('Tina', $names)) {
	echo 'Tina is in the array' . PHP_EOL;
} else {
	echo "Tina is not in the array" .PHP_EOL;
}

if(isInArray('Bob', $names)) {
	echo 'Bob is in the array' . PHP_EOL;
} else {
	echo "Bob is not in the array" .PHP_EOL;
}


// === STEP #3 ===
//Create a function to compare 2 arrays that returns the number of values in common between the arrays. 
//Use the 2 example arrays and make sure your solution uses array_search().

function numberOfValuesInCommon($array1, $array2)
{
	$count = 0;
	foreach ($array1 as $value) 
	{
		if(isInArray($value, $array2)) {
			$count++;
		}
	}
	return $count;
}
echo "The number of values that \$names and \$compare have in common is" . numberOfValuesInCommon ($names, $compare) . PHP_EOL;

//=================================================================================================================================

//SWITCH CASE:

// Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');



switch($dayOfWeek) {
     case 1:
         // Output Monday
     	$dayOfWeek = 1;
     	echo "Monday" . PHP_EOL;
     	break;

     case 2:
     	$dayOfWeek = 2;
     	echo "Tuesday" . PHP_EOL;
     	break;
         // Output Tuesday
     // etc through day 7

     case 3:
     	$dayOfWeek = 3;
     	echo "Wednesday" . PHP_EOL;
     	break;

     case 4:
     	$dayOfWeek = 4;
     	echo "Thursday" . PHP_EOL;
     	break;

     case 5:
     	$dayOfWeek = 5;
     	echo "Friday" . PHP_EOL;
     	break;	

     case 6:
     	$dayOfWeek = 6;
     	echo "Saturday" . PHP_EOL;
     	break;	

     case 7:
     	$dayOfWeek = 7;
     	echo "Sunday" . PHP_EOL;
     	break;

 }

  echo $dayOfWeek . PHP_EOL;
	 
if ($dayOfWeek == 1) {
	echo "Monday" . PHP_EOL;

} 	elseif ($dayOfWeek == 2) {
 		echo "Tuesday" . PHP_EOL;
	}
 	
 	elseif ($dayOfWeek == 3) {
 		echo "Wednesday" . PHP_EOL;
	}
 	
 	elseif ($dayOfWeek == 4) {
 		echo "Thursday" . PHP_EOL;
 	}

	elseif ($dayOfWeek == 5){
		echo "Friday" . PHP_EOL;
	}

	elseif ($dayOfWeek == 6){
		echo "Saturday" . PHP_EOL;
	}
 	
 	else {
 		echo "Sunday" . PHP_EOL;
 	}
//=====================================================================

 // FOR EACH:
 
// ==== STEP #1 - 
//Download technology-companies file to exercises directory:

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];


// ==== STEP #2 ====
//Add code to output the $companies array in its current form.
print_r($companies);

// ==== STEP #3 ====
//Sort the $companies array by company name and output the results.
ksort($companies);
print_r($companies);

// ==== STEP #4 ====
//Sort the people in each company alphabetically. 
//Use a foreach loop and will need to reassign each inner array after sorting. Output the result.
foreach ($companies as $key => $company) {  
    asort($company);
    $companies[$key] = $company;
    print_r($company) . print_r($people);
}

// ==== STEP #5 ====
//Sort the companies from "biggest" to "smallest". This may be easier than you think, but be sure you don't loose the company names!
arsort($companies);  
print_r($company);


//Alternative lesson notes on todos:
$todos = [
    'todo1' => 'take out trash',
    'todo2' => 'do the dishes'
];

foreach($todos as $key => $todo) {
    $todo[$key] = ucfirst($todo); //$todo is a copy of $todos[$key]   
}
print_r($todos);	

$testArray = [2, 1, -5, "bob"];
$result = 0;

foreach($testArray as $element){
	//Inside loop if element is numeric
	if (is_numeric($element)) {
		// convert negative to positive:
		if($element < 0) {
			$element = abs($element);
		}
		if($element % 2 == 0) {
			$result *= $element;
		} else {
			$result += $element;
		}
	}
	

}//end of loop

echo $result . PHP_EOL; //echo the result
//===================================================================

// WHILE:

$test = 5;

while ($test <=15) {
	echo "\$test is equal to {$test}\n";
	$test++; //can also use $test+=1; to increment by 1
}


//======================================================================
//EXPLODE:
//LESSON NOTES - PHP ARRAY FUNCTIONS: EXPLODE/IMPLODE 

array_push()  //Push one or more elements onto the end of an array
array_pop()  //Pop the element off the end of an array
array_shift()  //Shift an element off the beginning of an array
array_unshift() //Prepend one or more elements to the beginning of an array

$foods = [
    'fruit' => 'apple',
    'meat' => 'chicken',
    'cheese' => 'feta',
    'dessert' => 'key lime pie',
    'veggie' => 'zucchini',
    'bread' => 'honey oat bread'
];

//IMPLODE


//EXPLODE
$anotherFoodsString = 'apple, chicken, feta, key lime pie, zucchini, honey oat';
$foodsArray = explode (",", $anotherFoodsString);

//Partially Exlode:
$anotherFoodsString = 'apple, chicken, feta, key lime pie, zucchini, honey oat';

$anotherFoodsString = explode(",", $anotherFoodsString, 3); // lists the 1st to elements & concatenates the remainig elements into one string
$print_r($anotherFoodsString);





//File Reading:
function parseContacts($filename)
{
	$contacts = array();
	$filename = 'contacts.txt';
	$handle = fopen($filename, 'r');
	$contents = trim(fread($handle, filesize($filename))); 
	$contacts = explode("\n", $contents);

	$outputArray = [];

	foreach ($contacts as $key => $contact) 
	{
		$personArray = explode("|", $contact);

		$phoneNumber = substr($personArray[1],0,3);
		$phoneNumber .= "-"; // PHP shorthand to concatenate the string
		$phoneNumber .= substr($personArray[1],3,3);
		$phoneNumber .= "-";
		$phoneNumber .= substr($personArray[1],6); // leaving the 3rd number off instructs the code to include the remaining digits in this string


		$name = $personArray[0];

		$outputArray[$key] = [
			"name" => $name,
			"number" => $phoneNumber

		]; //pushes the key to the array & iterates
	}

$contacts = $outputArray;
return $contacts;
}

var_dump(parseContacts('contacts.txt'));

//fclose($handle);
//===============================================

//FILE WRITING:
function append($filename, $stringToWrite)
{
	$handle = fopen($filename, 'a');
	fwrite($handle, $stringToWrite);
	fclose($handle);
}

function logMessage($logLevel, $message)
{
	$filename = "log" . date('Y-m-d') . ".log";

	$stringToWrite = date('Y-m-d H:i:s') . "[" . $logLevel . "]" . $message;

	append($filename, $stringToWrite);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");

function logInfo($message);
{
	logMessage("INFO");
}
//=======================================================




