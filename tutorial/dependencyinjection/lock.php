<?php

class Lock{
	
	protected $isLocked;


	public function lock(){
		$this->isLocked = true;
	
	}
	
	//create unlock
	public function unlock(){
		$this->isLocked = false;
	}
	//gets islocked
	public function isLocked(){
		return $this->isLocked;
	}
}