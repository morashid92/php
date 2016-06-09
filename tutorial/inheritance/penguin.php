<?php

class Penguin extends Bird{
	public function foo(){
		echo $this->legCount;
	}

	public function getRashid(){
		echo $this->rashid;
	}


}