<?php

function bonusParser($filename)
{
	$people = array();
	$filename = 'bonus.txt';
	$handle = fopen($filename, 'r');	
	$contents = trim(fread($handle, filesize($filename))); 
	$people = explode("\n", $contents);

	$arrayTwo = [];

	foreach ($people as $key => $person) 
	{	
		$peopleArray = explode("/", $people);

		$age = substr($peopleArray[1],0,2);
		$states = substr($peopleArray[2],0);
		$

		$name = $peopleArray[0];

		$arrayTwo[$key] = [
			"name" => $name,
			"age" => $age,
			"states" => $states
		];

	}
$people = $arrayTwo;
return $people;
}

var_dump(bonusParser('bonus.txt'));








// ===== BONUS EXERCISES ====================
//READING FILES BONUS:
    
// === 1) Create a separate file in your php exercises folder called "bonusParser.php".
// === 2) In the bonusParser.php file, create a function, "fileReader()"," that will read the contents of a file using the logic for reading a file. 
// ===== The function should take in a string for a file path and return a string with the contents of a file.
// === 3) Create a new file called bonus.txt and paste in the contents from the Slack channel post.
// === 4) Pass in the bonus file path for bonus.txt into the fileReader() function and store the returned string in a variable called bonusContent.
// === 5) Create another function to parse the contents of the bonus file called bonusParse():
    
// === bonusParse() should take in a string of content and return an array of information for each "person" in the bonus file. 
// === Each person's information should be contained in an array with the first element being their name, second element being there age, third element being the states they have resided in (the states should be spelled out entirely, not abbreviated, and should be title cased), and finally the last element should be removed and used to determine if the name of the person in the first element will be in all CAPS (true) or all lowercase (false).
// === To convert to the full state name from the abbreviation, use the link in the Slack channel for copy-friendly state names.