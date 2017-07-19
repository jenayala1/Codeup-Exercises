<?php

//EXERCISE #1
$a = 0;

do {
	echo $a .PHP_EOL;
	$a += 2;
	
} while ($a <= 100);


//EXERCISE #2
$a = 100;
do {
	echo $a .PHP_EOL;
	$a -= 5;
	
} while ($a >= -10);

//EXERCISE #3
$a = 2;

do {
	echo $a .PHP_EOL;
	$a *= $a;
	
} while ($a < 1000000);