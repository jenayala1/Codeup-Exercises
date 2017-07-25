<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicsArray = explode(', ', $physicistsString);
sort($physicsArray);
$lastItem = array_pop($physicsArray);
$newPhysicsArray = array_push($physicsArray, 'and ', $lastItem);
$famousFakePhysicists = implode(',', $physicsArray);


echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;