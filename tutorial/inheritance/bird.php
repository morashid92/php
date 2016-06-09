<?php


//public 
//protectd can be called using this in sub classes
//private only class that its in can access it
class Bird{

	protected $canFly;
	protected $legCount;
	protected $rashid = "Hello im rashid";

	public function __construct($canFly, $legCount){
		$this->canFly = $canFly;
		$this->legCount = $legCount;
	}

	public function canFly(){
		return $this->canFly;
	}

	public function getLegCount(){
		return $this->legCount;
	}
}