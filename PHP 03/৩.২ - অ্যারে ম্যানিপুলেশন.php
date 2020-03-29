<?php

$students = [
    "rahim",
    "karim",
    123,
    "monir"

];

//mutable

$students[2] = "shafik";

$n = count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}


echo "=========\n";


$stdnt = array_shift($students);
$stdnt = array_pop($students);

$n = count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}


echo "=========\n";

$students [] = "jamal";
array_push($students, "kamal");
array_unshift($students,"salam");

$n = count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}


/*
araay_shift();  first element ber korey dey
array_unshift();
array_pop();    last element ber korey dey
array_push();
*/