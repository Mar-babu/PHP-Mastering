<?php

$vegetables = preg_split('/(, |,)/','brinjal, carrot, capsicum,potato, broccoli'); //delimeter
print_r($vegetables);
//$vegetables = explode(', ','brinjal, carrot, capsicum');  //delimeter

echo count($vegetables);

//var_dump($vegetables);
//echo $vegetables[1];

/*
$vegetablesString = join(', ', $vegetables);
echo $vegetablesString;

echo count($vegetables);
*/

//string  => array   = explode
//array => string = join   