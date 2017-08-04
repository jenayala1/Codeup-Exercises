<?php

class CanOfSoda
{
	//Properties:
	public $brandName;
	public $isFull = true;
	public $isOpen = false;
	public $expirationDate;

	//methods:
	public function openSoda()
	{
		if(!$this->$isopen) {
			$this->isOpen = true;

	} else {
		echo "Can is already open";
	}

	public function pourOut()
	{
		if($this->isFull && $isOpen = true) {
			$this->isFull = false;
		} else {
			echo "The can is empty" . PHP_EOL;
		}
	} 