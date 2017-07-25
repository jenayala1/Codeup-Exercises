<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicsArray = explode(', ', $physicistsString);

$famousFakePhysicists = implode (',', $physicsArray);


echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";