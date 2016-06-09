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
$obj2 = new MyClass;



echo $obj->getProperty();
unset($obj);
echo "End of file.<br />";
echo $obj2->getProperty();
?>