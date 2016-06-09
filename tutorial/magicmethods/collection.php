<?php

class Collection implements Countable, JsonSerializable{
	protected $items = [];


	//__set()
	//__get()
	//__call()
	//__toString()

	public function __set($key, $value){
		$this->set($key,$value);
	}

	public function __get($value){
		return $this->get($value);
	}

	public function add($value){
		$this->items[] = $value;
	}

		//creates a new function using call
	public function __call($func, $args){
		echo $func . ' has been called with arguments' . implode(',', $args);
	}

	public function __toString(){
		return $this->jsonSerialize();
	}

	public function get($key){
		return array_key_exists($key, $this->items) ? $this->items[$key] : null;
	}

	public function set($key, $value){
		$this->items[$key] =$value;
	}

	public function toJson(){
		return json_encode($this->items);
	}

	public function count(){
		return count($this->items);
	}

	public function jsonSerialize(){
		return json_encode($this->items);
	}
}