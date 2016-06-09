<?php

class Foo{

	public static $bar = 'foobar <br />'; 

	public static function hello($var){
		return $var;
		//return $this->bar; // if we tried to do this it 
		//wouldnt work because we are not accessing an
		//instance here
	}
}