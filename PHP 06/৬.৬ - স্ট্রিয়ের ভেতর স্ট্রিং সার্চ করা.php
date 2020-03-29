<?php

$string = "Quick Brown fox Fox Jumps jumps Over The Lazy Dog";
//echo $string[12];
$offset = strripos($string, "Jumps");
//$offset = strrpos($string, "Jumps");

/*

echo stripos($string, "fox");
//echo strpos($string, "Fox");


$offset = stripos($string, "Quick");
if($offset !== false){
    echo "\n Word was found";
}else{
    echo "\n Word was not found";
}
*/

echo $offset;