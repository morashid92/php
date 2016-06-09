<?php

require 'chest.php';
require 'lock.php';


//instantiate chest and new Lock (construct parameter)
$chest = new Chest(new Lock);
$chest->close();
$chest->open();