<?php


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