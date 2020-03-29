<?php

/**
 * Determine if the argument is even or odd
 */


 function isEven($n){
    if($n%2==0){
        return true;
    }else{  
        return false;
    }
}



function factorial($n /*int $n ,php 7 feature*/){
    if(gettype($n) !="integer"){    // without php 7 feature
        return "invalid";
    }
    $result = 1;
    for($i = $n; $i > 1; $i--){
        $result *= $i;
    }
    return $result;

}
//function serve($foodTypes, $numberOfItems="4 plates"){
//function serve($foodTypes="salad",$numberOfItems="4 plates"){
function serve($foodTypes,$numberOfItems="4 cup"){
    echo "{$numberOfItems} of {$foodTypes} have been served";
}
