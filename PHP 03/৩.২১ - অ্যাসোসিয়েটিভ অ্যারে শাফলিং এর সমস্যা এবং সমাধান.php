<?php

$fruits = array('a'=>'apple','b'=>'banana','f'=>'orange','c'=>'pulm','d'=>'dates','m'=>'mango');

$_fruits = $fruits;
shuffle($_fruits);
/*
shuffle($fruits);
print_r($fruits);
*/

$key = array_rand($fruits);
//echo $key;

echo $fruits[$key];

echo"\n";
print_r($_fruits);