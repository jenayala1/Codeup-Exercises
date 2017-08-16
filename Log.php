<?php

class Log
{
	private $filename;
	private $handle;
	public $prefix;


	public function __construct($prefix="log")
	{
		if(is_string($prefix)) {
			$prefix = 'log';
		}

		$this->$filename = $prefix . "-" . date('y-m-d') . ".log";
		$this->$handle = fopen($this->filename, 'a');
	}

	public function append($filename, $stringToWrite)
	{
		$handle = fopen($filename, 'a');
    	fwrite($handle, $stringToWrite . PHP_EOL);
    	fclose($handle);
	}
	
	protected function logMessage($logLevel, $message)
	{
		$timestamp = date("Y-m-d H:i:s");
		$logEntry = PHP_EOL . "$timestamp - $level - $message";
		fwrite($this->handle, $logEntry);
		
	} 

	public function info($message)
	{
		  $this->logMessage("INFO", $message);
	}

	public function error($message)
	{
		$this->logMessage("ERROR", $message);
	}

	public function __destruct()
	{
		fclose($handle);
	}

}