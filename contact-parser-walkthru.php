<?php

function parseContacts($filename)
{
	$contacts = array();
	$filename = 'contacts.txt';
	$handle = fopen($filename, 'r');
	$contents = fread($handle, filesize($filename));
	$contents = trim(fread($handle, filesize($filename))); 
	$contactsArray = explode("\n", $contents);

	$outputArray = [];

	foreach ($contactsArray as $key => $contact) 
	{
		$personArray = explode("|", $contact);
		$phoneNumber = substr($personArray[1],0,3);
		$phoneNumber .= "-"; // PHP shorthand to concatenate the string
		$phoneNumber .= substr($personArray[1],3,3);
		$phoneNumber .= "-";
		$phoneNumber .= substr($personArray[1],6); // leaving the 3rd number off instructs the code to include the remaining digits in this string

		$name = $personArray[0];

		$outputArray[$key] = [
			"name" => $name,
			"number" => $phoneNumber

		]; //pushes the key to the array & iterates
	}

	$contacts = $outputArray;
	return $contacts;
}

var_dump(parseContacts('contacts.txt'));
//fclose($handle);