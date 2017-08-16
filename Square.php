<?php

require_once "Rectangle.php";

class Square extends Rectangle
{

	public function __construct($height, $width)
	{
		parent::__construct($height, $width);
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
