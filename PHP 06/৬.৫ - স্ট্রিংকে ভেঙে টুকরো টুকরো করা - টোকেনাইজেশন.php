<<?php

$string = "Hello World, How Are You";
$string2 = "The Quick Brown Fox Jumps Over The Lazy Dog";

$parts = explode(" ",$string);
//print_r($parts);

echo PHP_EOL;

$original = implode(" ",$parts);
//$original = join(" ",$parts);
//echo $original;

$parts2 = str_split($string);
//print_r($parts2);
echo PHP_EOL;

$parts3 = strtok($string, " ,");
while($parts3 !==false){
    echo $parts3."\n";  //iterator
    $parts3 = strtok(" ,");

}

echo PHP_EOL;

$parts4 = strtok($string, " ");
while($parts4 !==false){
    echo $parts4."\n";  //iterator
    $parts4 = strtok(" ,");

}

echo PHP_EOL;

$parts5 = preg_split("/\s|,/",$string2);
//$parts5 = preg_split("/ |,/",$string2);
print_r($parts5);