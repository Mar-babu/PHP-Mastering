<?php
//for($n = 0; $n<=10; $n++ /* $n+=1 */){
/*
    for($n = 1; $n<=20; $n+=2){
    echo $n;
    echo PHP_EOL;
}
*/



for($m = 1; $m<=10; $m+=2){
    echo PHP_EOL;
    echo $m;

    for($n=0; $n<$m; $n++){
        echo "*";
    }
}

echo PHP_EOL;

$m = 0;
while($m < 10){
    $m++;
    echo $m;
    echo PHP_EOL;
}

echo PHP_EOL;

$m = 0;
do{
    $m++;
    echo $m.PHP_EOL;
} while($m<10);