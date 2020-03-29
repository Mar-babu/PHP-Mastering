<?php

$f = (false || true);  //true
$e = false or true;    // $e = false 
var_dump($f, $e);

$f = (false && true);  //false
$e = false and true;
var_dump($f, $e);




https://www.php.net/manual/en/language.operators.precedence.php