<?php
include_once "functions.php";

$n = 7;

if (isEven($n)){
    echo "{$n} is an even number";
}else{
    echo "{$n} is an odd number";
}

echo PHP_EOL;
echo "factorial of {$n} is ".factorial($n);