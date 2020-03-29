<?php
//1.  divisible by 4 ?
//2.  divisible by 100 ?
//3   divisible by 400 ?


$year = 1997;
if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "{$year} is a leap year";
}
elseif($year % 4 == 0 && $year % 100 ==0){
    echo "{$year} is not a leap year";
}
elseif ($year % 4 == 0){
    echo "{$year} is a leap year";
}
else{
    echo "{$year} is not a leap year";
}


echo"\n";

if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} is a leap year";
}
else{
    echo "{$year} is not a leap year";
}


/*
//year = 2000
//if(true && (false || true)){
    if(true && true)){
}

//year = 2003
//if(false && )){
    if(true && true)){
    }

//year = 1900
//if(true && (false || false)){
    if(true && false)){
    }
*/