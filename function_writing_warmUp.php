<?php


function caseChange($firstName, $lastName) {
	if(is_string($firstName) && is_string($lastName)) {
		return "Hello" . " " . ucfirst($firstName) . " " . ucfirst($lastName) . "!" .PHP_EOL;
	}
}

echo caseChange('Jennifer', 'ayala');