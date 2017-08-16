<?php

require_once "Rectangle.php";
require_once "Square.php";

$rectangle1 = new Rectangle(3, 10);
echo "A rectangle with this height and weight has an area of " . $rectangle1->area() . " and perimeter of " . $rectangle1->perimeter() . PHP_EOL;

$square1 = new Square(4, 4);
echo "A square with this height and weight has an area of " . $square1->area() . " and perimeter of " . $square1->perimeter() . PHP_EOL;