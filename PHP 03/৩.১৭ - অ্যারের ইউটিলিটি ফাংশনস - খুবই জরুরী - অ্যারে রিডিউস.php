<?php

$numbers = array(1,2,3,4,5,6);

function sum($oldValue=0, $newValue){
    if($newValue%2==0){
        return $oldValue+$newValue;
    }
    return $oldValue;
}

$sum = array_reduce($numbers, 'sum');
echo$sum;

echo"\n";

echo count($numbers);

/*
sum(0,1); //1
sum(1,2) //1
sum(3,3); //1
sum(6,10); //1
sum(0,1); //1
*/