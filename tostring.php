<?php

class MyClass
{

	public $prop1 = "I am a class property!";

	public function __construct()
	{
		echo 'The class"',__CLASS__,'"was initiated!<br />';
	}

	 public function __destruct()
  	{
      echo 'The class "', __CLASS__, '" was destroyed.<br />';
  	}
  	
  	public function __toString()
  	{
  		echo "using the toString method";
  		return $this->getProperty();
  	}

	public function setProperty($newval)
	{
		$this->prop1 = $newval;
	}

	public function getProperty()
	{
		return $this->prop1 . "<br />";
	}
}

$obj = new MyClass;

echo $obj; //uses toString so it has to be eplicitly defined

unset($obj);