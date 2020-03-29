<?php

//$fruits = array('apple','banana','orange','plum','dates','mango');
$fruits = array('a'=>'apple','b'=>'banana','f'=>'orange','c'=>'plum','d'=>'dates','m'=>'mango');
$numbers = array(55,12,3,33,568,77);

//sort($numbers, SORT_STRING);
//asort($numbers);
//rsort($numbers);   //sort er reverse function
//arsort($numbers);
//sort($numbers);
//print_r($numbers);

$random = array("apple","Apple","banana","pineapple","Banana","Pineapple");
sort($random, SORT_STRING | SORT_FLAG_CASE);  //CASE INSENSITIVE SORT
//sort($random);  //CASE SENSITIVE SORT
print_r($random);

//krsort($fruits);
//ksort($fruits);
//asort($fruits);
//print_r($fruits);

/*
for($i=0;$i<count($numbers);$i++){
    echo $numbers[$i]."\n";
}
*/

echo"\n";

/*
foreach($fruits as $fruit){
    echo $fruit."\n";
}
*/

/*
foreach($fruits as $fruit){
    echo $fruit."\n";
}
*/





//PHP MANUAL DEKHTE HOBE