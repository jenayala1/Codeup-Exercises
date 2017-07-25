<?php

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
