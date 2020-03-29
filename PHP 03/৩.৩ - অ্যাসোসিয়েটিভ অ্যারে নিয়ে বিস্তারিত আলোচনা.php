<?php

/*
//associative array
$students = [
    '12'=>'Hasan',
    '13'=>'Karim',
    '20'=>'Jalal'
];

echo $students[20];

//indexed array
$students = [
    'Hasan',
    'Karim',
    'Jalal'
];
*/


$foods =[
    'vegetables' => 'brinjal, brocolli, carrot, capsicam',
    'fruits' => 'orange, banana, apple',
    'drinks' => 'water, milk'
];

//$foods['drinks'] = $foods['drinks'].", orange juice";
$foods['drinks'] .= ", orange juice";

//echo $foods[0];  hobena
//echo $foods['vegetables'];
//echo count($foods);

/*
$n = count($foods);
for($i = 0; $i<$n; $i++){

}   hobena  */

/*
foreach ($foods as $key=>$value){
    echo $key." = ".$value."\n";     //easy for associative array
}
*/

$keys = array_values($foods);
//$keys = array_keys($foods);
print_r($keys);



$keys = array_keys($foods);
for($i = 0; $i<count($keys); $i++){
    $key = $keys[$i];
    echo $foods[$key]."\n";

}