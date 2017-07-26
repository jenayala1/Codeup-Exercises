<?php

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

//combine associative arrays





