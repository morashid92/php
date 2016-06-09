<?php
require 'talkinterface.php';
require 'dog.php';
require 'cat.php';


$dog = new Dog();
$cat = new Cat();

echo $dog->talk();
echo $cat->talk();
