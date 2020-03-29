<?php

$fruits = array('apple','banana','orange','plum','dates','mango');

$random = array("a"=>12,"b"=>45,"c"=>34,"d"=>22,"e"=>77,"f"=>31, 12=>78,"g"=>99);

$newFruits1 = array_slice($fruits,3,2);
$newFruits2 = array_slice($fruits,3);    //orginal array ke modify kore
$newFruits2 = array_slice($fruits,3,null,true);
/*
$newFruits = array_merge($newFruits1,$newFruits2);
print_r($newFruits1);
print_r($newFruits2);
print_r($newFruits);
*/
//$newFruitsplus = $newFruits1 + $newFruits2;
//print_r($newFruitsplus);

$r1 = array_slice($random,0,2,true);
$r2 = array_slice($random,4,null,true);
$r3 = array("j"=>45,"k"=>12);

$randomData = array_splice($random,2,2,array("j"=>45,"k"=>12));
$randomConnectivity = $r1+$r3+$r2;

//print_r($randomData);
print_r($random);
print_r($randomConnectivity);