<?php

require 'database.php';
require 'user.php';

$user = new User(new Database);
$user->create(['username' => 'Rashid' ]);