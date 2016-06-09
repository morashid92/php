<?php

class Chest{

protected $lock;
protected $isClosed;
//we are usign an argument(dummy) to create a locked instance later on
	public function __construct($lock){
		$this->lock =$lock;
	}

	public function close($lock = true){

		if ($lock === true){
		$this->lock->lock();
		}
		$this->isClosed = true;
		echo 'Closed <br />';
	}

	public function open(){
		if ($this->lock->isLocked()){
			$this->lock->unlock();
		}
		$this->isClosed = false;
		echo 'Opened <br />';
	}	


	public function isClosed(){
		return $this->isClosed;
	}
}