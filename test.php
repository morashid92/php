<?php

 class Rashid {

 	public $prop = "hello im the initial property <br />";

 	public function setProperty($newprop)
 	{
 		$this->prop=$newprop;
 	}

 	public function getProperty()
 	{
 		return $this->prop;
 	}

}

$obj = new Rashid;

echo $obj->prop;

 $obj->setProperty("hello im the new property");

echo $obj->getProperty();
?>