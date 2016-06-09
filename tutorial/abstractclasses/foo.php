<?php
// cannot instantiate abstract classes 
abstract class Foo{
	public function bar(){
		return 'foobar';
	}

	abstract public function foobar();
}