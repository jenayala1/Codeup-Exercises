<?php

class Log
{
	public $filename;
	

	public function append($filename, $stringToWrite)
	{
		$handle = fopen($filename, 'a');
    	fwrite($handle, $stringToWrite . PHP_EOL);
    	fclose($handle);
	}
		

	public function logMessage($logLevel, $message)
	{
		$filename = "log" . date('Y-m-d') . ".log";
		$stringToWrite = date('Y-m-d H:i:s') . "[" . $logLevel . "]" . $message;
		$this->append($filename, $stringToWrite);
	} 

	public function info($message)
	{
		  $this->logMessage("INFO", $message);
	}

	public function error($message)
	{
		$this->logMessage("ERROR", $message);
	}

}