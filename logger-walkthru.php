<?php

function append($filename, $stringToWrite)
{
	$handle = fopen($filename, 'a');
	fwrite($handle, $stringToWrite);
	fclose($handle);
}

function logMessage($logLevel, $message)
{
	$filename = "log" . date('Y-m-d') . ".log";

	$stringToWrite = date('Y-m-d H:i:s') . "[" . $logLevel . "]" . $message;

	append($filename, $stringToWrite);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");