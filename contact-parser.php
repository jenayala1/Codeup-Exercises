<?php




function parseContacts($contents){
$filename = 'contacts.txt';
$handle = fopen($filename, 'r');

$contents = fread($handle, filesize($filename));	
$contents = trim($contents); 
$contacts = explode("\n", $contents);

$arrayTwo = [];

	foreach ($contacts as $name) {	
		
	}

	return $contacts;
}

var_dump(parseContacts($contents));


fclose($handle);