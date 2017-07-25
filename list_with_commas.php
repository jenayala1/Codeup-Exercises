<?php

//STEPS 1 & 3:

// $physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
// $physicsArray = explode(', ', $physicistsString);
// sort($physicsArray);
// $lastItem = array_pop($physicsArray);
// $newPhysicsArray = array_push($physicsArray, 'and ' . $lastItem);
// $famousFakePhysicists = implode(',', $physicsArray);

// echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;

//=========================================
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
	$array = explode(', ', $physicistsString);

function humanizedList($array, $sort = false) {
	$lastItem = array_pop($array);
	$physicsArray = array_push($array, 'and ' . $lastItem); 

	 	if ($sort = true){
		 	asort($array);
		} 

$famousFakePhysicists = implode(',', $physicsArray);
return $famousFakePhysicists;	
}
humanizedList($array, false);
//return $famousFakePhysicists;	
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;