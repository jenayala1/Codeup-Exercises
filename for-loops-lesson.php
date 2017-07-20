<?php

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