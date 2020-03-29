<?php

$fruits = array('apple','banana','orange','plum','dates','mango');

$random = array("a"=>12,"b"=>45,"c"=>34,"d"=>22,"e"=>77,"f"=>31, 12=>78,"g"=>99);

$newfruits = array("jackfruits","tamarind","pineapple");
$somefruits = array_splice($fruits,-5,2);    //orginal array ke modify kore
print_r($somefruits);
print_r($fruits);