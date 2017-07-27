<?php

function parseContacts($filename)
{
	$contacts = array();
	$filename = 'contacts.txt';
	$handle = fopen($filename, 'r');	
	$contents = trim(fread($handle, filesize($filename))); 
	$contacts = explode("\n", $contents);

	$arrayTwo = [];

	foreach ($contacts as $key => $contact) 
	{	
		$nameArray = explode("|", $contact);

		$phnumber = substr($nameArray[1],0,3);
		$phnumber .= "-";
		$phnumber .= substr($nameArray[1],3,3);
		$phnumber .= "-";
		$phnumber .= substr($nameArray[1],6);

		$name = $nameArray[0];

		$arrayTwo[$key] = [
			"name" => $name,
			"number" => $phnumber 
		];

	}
$contacts = $arrayTwo;
return $contacts;
}

var_dump(parseContacts('contacts.txt'));
//fclose($handle);

