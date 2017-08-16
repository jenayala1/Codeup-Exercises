<?php

require_once "Rectangle.php";

class Square extends Rectangle
{

	public function perimeter()
	{
		return ( 2 * ($this->height)) + (2 * ($this->width));
	}
		
}
