<?php

// === LOG FILE WALKTHRU :
class Log
	{
		public $filename;
		

		// public function append($filename, $stringToWrite)
		// {
		// 	$handle = fopen($filename, 'a');
	 //    	fwrite($handle, $stringToWrite . PHP_EOL);
	 //    	fclose($handle);
		// }
			

		public function logMessage($level, $message)
		{
			$this->filename = "log-" . date('Y-m-d') . ".log";
			$handle = fopen($this->filename, 'a');
			$stringToWrite = date('Y-m-d H:i:s') . "[" . $logLevel . "]" . $message . PHP_EOL;
			fwrite($handle, $stringToWrite);
			fclose($handle, $stringToWrite);
		
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

// === LOG TEST FILE WALKTHRU:
	require_once "Log.php";
	
	$log = new Log();
	$log->filename = "log-" . date('Y-m-d') . ".log";
	$log->error("this is an error");
	$log->info("User successfully logged in");
	$log->logMessage("CATASTROPHIC!");
	
// ===================================================
?>







