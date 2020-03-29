<?php

$fruits = array('apple','banana','orange','plum','dates','mango');

$random = array("a"=>12,"b"=>45,"c"=>34,"d"=>22,"e"=>77,"f"=>31, 12=>78,"g"=>99);

//$somefruits = array_slice($fruits,-5,-1,true);
//$somefruits = array_slice($fruits,-5,-1);
//$somefruits = array_slice($fruits,2,-1);
//$somefruits = array_slice($fruits,2,2);
//$somefruits = array_slice($fruits,2);

//print_r($somefruits);

//$randomData = array_slice($random,2,null,true);
$randomData = array_slice($random,2);
print_r($randomData);