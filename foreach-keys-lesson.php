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


//BONUS EXERCISES:

<?php 

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


// BONUS 3 - output all first entries by an author given an array of books information

// !!!DISCLAIMER!!! this bonus exercise is much more challenging than originally estimated without using array functions in PHP.
// The following solution only uses existing code we have used in the curriculum up to this lesson to solve this bonus question. A simpler solution would involve creating a new array of author names using array_push().

$parentIndex = -1; // variable to track current numeric index in parent loop traversal of an associative array
foreach($books as $key => $book) { // iteratate over books array
    $parentIndex++; // increment index of parent loop
    $matchingRecords = 0; // variable to keep track of any matching author records
    $childIndex= -1; // variable to track the current numeric index of the child loop traversal of an associative array
    foreach($books as $someKey => $someBook) { // child loop to iterate over the entire books array to check before an output is made
        $childIndex++; // increment index of child loop
        if ($book['author'] == $someBook['author']) { // checking only if author matches between parent loop and child loop
            $matchingRecords++; // if inner and outer loop authors match, increment the match count
            if ($matchingRecords == 1 && $parentIndex == $childIndex) { // if the matchcount is 1 and the inner and outer indexes match...
                // ... output the record
                echo $key . PHP_EOL;
                foreach($book as $header => $data) {
                    echo "$header : $data" . PHP_EOL;
                }
                echo "====================\n";
            }
        }
    }
}






