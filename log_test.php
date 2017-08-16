<?php

require_once "Log.php";

$log = new Log('log');
$log->filename = '$prefix-'. date("-Y-m-d"). ".log";
$log->error("this is an error");
$log->info("User successfully logged in");
$log->handle(date('Y-m-d H:i:s') . "[" . $logLevel . "]" . $message . PHP_EOL);


var_dump($log);




?>






