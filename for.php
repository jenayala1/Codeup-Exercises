<?php



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








