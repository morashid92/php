<?php

class MyClass
{
	//class properties and methods go here
	public $prop1 = "I am a class property!";


	public function setProperty($newval)
	{
		$this->prop1 = $newval;
	}

	public function getProperty()
	{
		return $this->prop1 . "<br />";
	}
}

//instantiate new object
$obj = new MyClass;
$obj2 = new MyClass;
//var_dump($obj);


echo $obj->prop1;
echo'</br>';
echo $obj2->prop1;
echo'</br>';

$obj->setProperty("hello im the new value for obj 1");
$obj2->setProperty("hello im the new value for obj 2");


echo $obj->getProperty();
echo $obj2->getProperty();
?>