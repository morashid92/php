<?php
class Person{
	public $name;
	public $age;

//constructur is a magic method "__" arr all magic
//constructor is called when class is instantiated
 	public function __construct($name, $age){
 		$this->name = $name;
 		$this->age = $age;
	}

	public function sentance()
	{
		return $this->name . ' is ' . $this->age . ' years old';
	}
}
