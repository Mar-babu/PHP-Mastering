<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12);

/*
function square($n){
    printf("Square of %d is %d \n",$n, $n*$n);
}
*/

/*
function cube($n){
    return $n*$n*$n;
}
*/

function even($n){
    return $n%2==0;
}

function odd($n){
    return $n%2==1;
}

//$newArray = array_map('cube',$numbers);
$evenNumbers = array_filter($numbers,'even');
$oddNumbers = array_filter($numbers,'odd');
//array_walk($numbers,'square');

 

print_r($numbers);

print_r($evenNumbers);
print_r($oddNumbers);

$persons = array('sudha','kabir','sabab','roni','jamal','sayma');

function filterBys($name){
    return $name[0]=='s';
}

$newPersons = array_filter($persons, 'filterByS');
print_r($newPersons);