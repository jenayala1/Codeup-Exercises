<?php

require_once "Rectangle.php";

class Square extends Rectangle
{

	public function __construct($height)
	{
		//Update the Square class to override the parent's constructor by only accepting one attribute (height) and using that to set both $width and $height in your class.
		//$this->height = $height;
		//$this->width = $height;

		//Update the constructor in Square to instead pass height on to the parent's constructor.
		$width = $height;
		parent::__construct($height, $width);
	}

	public function perimeter()
	{
		return ( 2 * ($this->height)) + (2 * ($this->width));
	}

}
