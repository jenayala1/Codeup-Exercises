<?php

//break at specified point:
for ($i = 1; $i <= 100; $i++) {
    echo $i . "\n";
    if ($i == 5) {
        break;
    }
}

//continue:
//example below will only echo out the response for odd numbers
for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
    if ($i % 2 == 0) {
        continue;
    }
    echo "^ that is an odd number.\n";
}

//Nested loops:

$numbers = array(1, 2, 3, 4, 5);

	// Loop 1
foreach ($numbers as $key => $value) {
    echo "==={$value} === \n";

    // Loop 2
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
        	//break; //breaks at 5
        	//continue; //skips 5
        	//break 2; //specifies to break out of the outer loop 1
        	//continue 2; // 
            echo "Inner loop fired at {$i}\n";
          
        }
    } echo "This part will not fire if a continue 2 replaces the break" . PHP_EOL;
}
echo "done!\n";




