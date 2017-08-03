<?php

require_once "Log.php";
$log = new Log();



$log->filename = "log-" . date('Y-m-d') . ".log";

$log->error("this is an error");


var_dump($log);
?>






