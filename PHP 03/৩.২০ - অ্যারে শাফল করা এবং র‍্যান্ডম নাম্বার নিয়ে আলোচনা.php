<?php

$numbers = range(40,72);
$random = mt_rand(0,32);

echo $numbers[$random]."\n";
//echo $random;


$random = mt_rand(0,32);

$luck = $numbers[$random];
if($luck%2==0){
    echo "Head";
}else{
    echo"Tail";
}

echo"\n";

shuffle($numbers);
print_r($numbers);

$randomNumbers = $numbers[3];
echo $randomNumbers;


/*
echo count($numbers);
echo"\n";
print_r($numbers);
*/