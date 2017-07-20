<?php



fwrite(STDOUT, "Please enter a starting number");

$startingNumber = trim(fgets(STDIN));

fwrite(STDOUT, "Please enter an ending number");

$endingNumber = trim(fgets(STDIN));

var_dump($startingNumber);
var_dump($endingNumber);


for ($ = $startingNumber; $i < $endingNumber; $i++){
	echo $i . PHP_EOL;

}