<?php

class Collection implements Countable, JsonSerializable{
	protected $items = [];

	public function add($value){
		$this->items[] = $value;
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