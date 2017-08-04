<?php

// CONSTRUCTOR LESSON:
//magic method - a function that isn't directly called, instead executed during other operations, automaticalt when an object is created

//destructor used to clean up program - closing files, connections to databases, etc.


// EXAMPLE CLASS FOR CONSTRUCTOR: filename = Test.php
class Test	
{
	public function__construct()
	{
		echo "Hello, my name is $name!" . PHP_EOL;
	}

	public function__destruct() //always fires/executes at the end of the script or when the object is destroyed (if the object is unset)
	{
		echo "Hello, I am dead... :(" . PHP_EOL;
	}

}

//EXAMPLE OBJECT FILE of TEST CLASS:
require_once "Test.php";

$someTest = new Test("Justin");
echo "Test" . PHP_EOL;
echo "Test" . PHP_EOL;
echo "Test" . PHP_EOL;
unset($someTest); // will call the destruct method
echo "Test" . PHP_EOL;
echo "Test" . PHP_EOL;
echo "Test" . PHP_EOL; //will continue to run after the destruct method
// ===============================

// DOG EXAMPLE - class file Dog.php:

class Dog
{
	public $name;
	public $breed;
	public $age;

	public function __construct($name, $breed, $age) //3rd argument is optional 
	{
		$this->name = $name;
		$this->breed = $breed;
		$this->age = $age;
	}

	//example of calling & passing the arguments in the construction instead of during instantiation:
	public function __construct($name ="rex", $breed="lab", $age=4) 
	{
		$this->name = $name;
		$this->breed = $breed;
		$this->age = $age;
	}


	public function bark($bark);
	{
		echo $bark;
	}
}


// DOG EXAMPLE OBJECT FILE:

$fido = new Dog("Sabrina", "Lab", 23); //instantiate the class by creating an object -construct requires 3 arguments, will err if not provided

$fido = new Dog(); //example of instantiating the class when the constructor includes the arguments passed



//Operation Class Example - Class file Operation.PHP:

class Operation
{
	public $num1;
	public $num2;
	public $currentOutput;
	public $operationHistory = [];

	public function__construct($num1)

}

//EXAMPLE OPERATION CLASS OBJECT INSTANTIATION FILE

//using default values:

$op = new Operation(4, 5);
$op->addNums();
$op->getCurrentOutput();
echo $op->getcurrentOutput();








