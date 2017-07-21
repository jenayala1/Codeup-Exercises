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










