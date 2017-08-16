<?php

require_once "Rectangle.php";

class Square 
{

	public function __construct($height, $width)
	{
		$this->height = $height;
		$this->width = $width;
	}

	public function perimeter()
	{
		return ( 2 * ($this->height)) + (2 * ($this->width));
	}

	public function area()
	{
		return $this->height * $this->width;
	}
		
}
