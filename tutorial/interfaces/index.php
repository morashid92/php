<?php

require 'collection.php';

$c = new Collection();

$c->add('foo');
$c->add('bar');



echo count($c);

echo $c->jsonSerialize();
