<?php

// Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');



switch($dayOfWeek) {
     case 1:
         // Output Monday
     	$dayOfWeek = 1;
     	echo "Monday" . PHP_EOL;
     	break;

     case 2:
     	$dayOfWeek = 2;
     	echo "Tuesday" . PHP_EOL;
     	break;
         // Output Tuesday
     // etc through day 7

     case 3:
     	$dayOfWeek = 3;
     	echo "Wednesday" . PHP_EOL;
     	break;

     case 4:
     	$dayOfWeek = 4;
     	echo "Thursday" . PHP_EOL;
     	break;

     case 5:
     	$dayOfWeek = 5;
     	echo "Friday" . PHP_EOL;
     	break;	

     case 6:
     	$dayOfWeek = 6;
     	echo "Saturday" . PHP_EOL;
     	break;	

     case 7:
     	$dayOfWeek = 7;
     	echo "Sunday" . PHP_EOL;
     	break;

 }

  echo $dayOfWeek . PHP_EOL;

  	 
if ($dayOfWeek == 1) {
	echo "Monday" . PHP_EOL;

} 	elseif ($dayOfWeek == 2) {
 		echo "Tuesday" . PHP_EOL;
	}
 	
 	elseif ($dayOfWeek == 3) {
 		echo "Wednesday" . PHP_EOL;
	}
 	
 	elseif ($dayOfWeek == 4) {
 		echo "Thursday" . PHP_EOL;
 	}

	elseif ($dayOfWeek == 5){
		echo "Friday" . PHP_EOL;
	}

	elseif ($dayOfWeek == 6){
		echo "Saturday" . PHP_EOL;
	}
 	
 	else {
 		echo "Sunday" . PHP_EOL;
 	}