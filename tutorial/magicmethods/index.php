<?php

require 'collection.php';

$c = new Collection();

$c->add('foo');
$c->add('bar');

//$c->baz = 'qux';


//echo $c->baz;

//echo $c->foo('foo', 'Bar'); 

echo $c;