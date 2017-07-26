<?php
//File reading - displays the content ouput in the layout as the functions direct below:

$filename = 'cities.txt'; //Ensure in the same folder path or that menu path is identified
	

$handle = fopen($filename, 'r');
	// $handle = abstract reference to a resource
	// $filename = identfies the specific resource
	// 'r' = read the file/resource
	
$contents = fread($handle, filesize($filename));
// filesize($filename) - returns the number of bytes(characters long) as filesize
// best practice to include the number of characters, without it specified it will read the entire file, reads the designated number starting at beginning of file
//must be included in the specified order of handle, filesize & filename

//to eliminate the whitespace:
$contents = trim($contents); // best practice

echo $contents;
$contentsArray = explode("\n", $contents);
//instructs the content to be displayed with a delimiter of new line ("\n")
// print_r($contentsArray);


fclose($handle); // required to instruct code to close after data collected (releases memory used to keep it open?)
//======================================================================================

//INSTRUCTOR EXAMPLE OF THE eats.txt file (list of restaurants):

//specify the file name or path:
$file = "eats.txt";

//open a data stream & store a file pointer to that stream/resource:
$handle = fopen($file, 'r');

//Streams are the way of generalizing file, network, data compression, and other operations

//Determin how many characters contained in the file:
echo filesize($file); //will provide the file size when php is run in command line - not needed for the actual file read

//return the file size in the read function:
$contents = fread($handle, filesize($file));


//echo all restaurants in all caps in alphabetical order:
echo $contents;

//Create a function to take in the file string & parse it for correct output:

function parseFileToOrderedCaps($string)
{
	$string = strtoupper($string);
	$contentsArr = explode("\n", $string);
	sort($contentsArr);
	foreach ($$contents as $eat) {
		echo $eat . PHP_EOL;
	}
}

// call file parser function:
parseFileToOrderedCaps($contents);

//close file:
$fclose($handle); 