<?php
	require 'bird.php';
	require 'pigeon.php';
	require 'penguin.php';


	$penguin = new Penguin(false, 2);

	if ($penguin->canFly()){
		echo 'can fly';
	} else {
		echo 'cant fly';
	}

//call foo which calls protected properties
	$penguin->foo();

	$penguin->getRashid();

