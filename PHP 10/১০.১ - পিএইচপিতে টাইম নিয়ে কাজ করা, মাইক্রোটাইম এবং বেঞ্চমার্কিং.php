<?php
//time();
//echo time();
//echo microtime();
//var_dump(microtime(true)) ;
/*
$mt = microtime(true);
printf("%10.18f", $mt);
*/
//echo date('d/F/y');

$startTime = microtime(true);
factorial(100);
sleep(2);
$endTime =microtime(true);

$executionTime = $endTime - $startTime;
printf("%10.8f", $executionTime);

function factorial($n){
    $result = 1;
    for($i = 1; $i<=$n; $i++){
        $result *= $i;
    }
    return $result;
}

