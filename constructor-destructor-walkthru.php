<?php
// ====== LOG CLASS WALKTHRU
class Log
{
	public $filename;
	public $handle;



	public function __construct($prefix="log")
	{
		$this->filename = $prefix . "-" . date('Y-m-d') . ".log";
		$this->handle = fopen($this->filename, 'a');
	}

	public function logMessage($logLevel, $message)
	{
		$timestamp = date("Y-m-d")
		$logentry = PHP_EOL . "timestamp - $level - $message";
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
		
		fclose($this->handle);
	}

}

//========= TEST FILE WALKTHRU

require_once "Log.php";
$logger = new Log('cli');
$logger->error("this is an error");
$logger->info("Something happened");









