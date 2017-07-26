<?php

// ==== INSTRUCTOR LESSON: WRITING FILES ==== //

// === Add new cities as a string on the last line:
$filename = "cities.txt";

$handle = fopen($filename, 'a'); //$handle = cursor pointer
$newCities = ['Changhua County, Taiwan', 'Hamina, Finland', 'St Ghislain, Belgium', 'Dublin, Ireland'];

$stringOfWhatYouWantToWrite = implode(',', $newCities);

fwrite($handle, $stringOfWhatYouWantToWrite); //takes to parameters the $handle & stringOfWhatYouWantToWrite

fclose($handle);

//=============================================//

// === Add new cities as an array:

$filename = "cities.txt";
$newCities = ['Changhua County, Taiwan', 'Hamina, Finland', 'St Ghislain, Belgium', 'Dublin, Ireland'];

$handle = fopen($filename, 'a'); //$handle = cursor pointer

foreach($newCities as $city){
	fwrite($handle, $city . PHP_EOL);
}

fclose($handle);
// ================================================//

// === Make a reusable function to write files:

function write($filename, $stringToWrite)
{
	$handle = fopen($filename, 'a');
	fwrite($handle, $stringToWrite);
	fclose($handle);
}
// ================================================ //

// ====Make a new file:
$filename = "instructors.txt";
$instructors = ['Zach', 'Justin', 'Luis', 'Fer', 'Ryan'];

foreach($instructors as $instructor)
{
	append($filename, $instructor . PHP_EOL);
}

function write($filename, $stringToWrite)
{
	$handle = fopen($filename, 'a');
	fwrite($handle, $stringToWrite);
	fclose($handle);
}

//============================================== //




