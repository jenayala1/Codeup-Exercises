<?php
 
function getAllContacts($filename){
	$contacts = array();
	$handle = fopen($filename, 'r');
	$contactString = trim(fread($handle, filesize($filename)));
	$contactsArray = explode("\n", $contactString);
	return $contactsArray;
}
//function that will make the machine work
function viewContacts($contacts){
	$contactList = array();
	foreach ($contacts as $contact){	
		$infoArray = explode("|", $contact);
		$parsedContacts =[];
		$parsedContacts['name'] = $infoArray[0];
		$parsedContacts['number'] = $infoArray[1];
		array_push($contactList, $parsedContacts);	
	}
	print_r("-------------CONTACTS-------------" . PHP_EOL . "    Name        |   Phone Number  " . PHP_EOL . "----------------------------------" . PHP_EOL);
	// viewContacts("contacts.txt");
	foreach($contactList as $contact){
		print_r($contact['name'] . '    |     ' .$contact['number'] .PHP_EOL );
	}
	
}

//basic beginning template

//user inputs a number


// //makes the entire menu work
function menu(){

	print_r(PHP_EOL . PHP_EOL);
	print_r("1. View Contacts" . PHP_EOL . "2. Add Contact" . PHP_EOL . "3. Search Contact By Name" . PHP_EOL . "4. Delete Contact" . PHP_EOL . "5. Exit" . PHP_EOL);
	
	fwrite(STDOUT, 'Please enter a # to select an action' . PHP_EOL);
	$input = trim(fgets(STDIN));

	if ($input == 1) {
		$contacts = getAllContacts('contacts.txt');
		viewContacts($contacts);
	}
		elseif ($input == 2) {
		addContact();
		}
		elseif ($input == 3) {
			searchContacts();
		}
		elseif ($input == 4) {
			deleteContact();

		}
		elseif ($input == 5){
			exit;
		}
		else {
			echo "Please choose a valid menu option" . PHP_EOL;
		}


// fclose($handle);
}
menu();


function addContact(){

	fwrite(STDOUT, 'Please enter new name' . PHP_EOL);
	$name = trim(fgets(STDIN));
	

	fwrite(STDOUT, 'Please enter new phone number' . PHP_EOL);
	$number = trim(fgets(STDIN));

	$filename = 'contacts.txt';
	$handle = fopen($filename, 'a');
	fwrite($handle, $name . "|" . $number);
	fclose($handle);
}


function searchContacts(){
	//Taking from user the Search name
	fwrite(STDOUT, 'Please enter a contact name to View' . PHP_EOL);
	$searchName = trim(fgets(STDIN));
	$contacts = [];
	
	$contactsArray = getAllContacts('contacts.txt');
	
	foreach($contactsArray as $contact){
		if (strpos($contact, $searchName)!==false){
			array_push($contacts, $contact);
		}

	}
	viewContacts($contacts);

}

 function deleteContact(){
	
	//foreach -- do we need a foreach to remove the specific index by name from the array? 
	
	fwrite(STDOUT, 'Please enter a contact name to Delete' . PHP_EOL);
	$deleteName = trim(fgets(STDIN));


	$contactsArray = getAllContacts('contacts.txt');

	foreach($contactsArray as $key => $contact){ 
		if (strpos($contact, $deleteName)!==false){
			unset($contactsArray[$key]);
		}
	}


	$stringToWrite = implode("\n", $contactsArray);
	$filename = 'contacts.txt';
	$handle = fopen($filename, 'w');
	fwrite($handle, PHP_EOL . $stringToWrite);
	fclose($handle);
	
	print_r("$deleteName has been removed from contact list" . PHP_EOL);
}


//======================================

// //this section is read 
// $contactsArray = [
// 	"Tarzan | 987234",
// 	"Jane | 3293048",
// 	"Peter| 12343",
// 	"Bob | 329048"

// ];

// function getContacts()
// {
// 	$filename = 'contacts.txt';
// 	$handle = fopen($filename, 'r');


// }

// 	fwrite(STDOUT, "Please input the name of the person to remove:");
// 	$nameToRemove = trim(fgets(STDIN));

// 	// if(in_array($nameToRemove, $contactsArray) {
// 	// 	$key = array_search($nameToRemove, $contactsArray));

// 	// 	unset($contactsArray[$key]);
	
// 	foreach($contacts as $key => $contact) {

// 		//if the name we want to remove is in the entire string containing the name and number
// 		if(strpos($contact, $nameToRemove) !== false) {
			
// 			//now that we've established that $nameToRemoe is in the array
// 			// we remove "Bob | 329048" from the array using the $key
// 			unset($contacts[$key]);
// 		}
// 	}
// $stringToWrite = implode("\n", $contacts);
// $filename = 'contacts.txt';
// $handle = fopen($filename, 'w');
// fwrite($handle . PHP_EOL . $stringToWrite);
// fclose($handle);



// var_dump($contactsArray);









