<?php
$n = 12;

/*
$students = array(
    "rahim",
    "karim",
    123,
    "monir"

);
*/

$students = [
    "rahim",
    "karim",
    123,
    "monir"

];

echo $students[2];
echo "=========\n";
var_dump($students);
echo "=========\n";
echo count($students);

echo "=========\n";

$n = count($students);
for($i=0;$i<$n;$i++){
//for($i=0;$i<count($students);$i++){
    echo $students[$i]."\n";
}

echo "=========\n";

for($i= $n-1;$i >= 0; $i--){
    echo $students[$i]."\n";
}


