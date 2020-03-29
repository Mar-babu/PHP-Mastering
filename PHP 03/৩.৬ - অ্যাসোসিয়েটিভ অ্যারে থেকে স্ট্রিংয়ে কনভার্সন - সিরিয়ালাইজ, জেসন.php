<?php
$student = array(
    'fname'=>'jamal',
    'lname'=>'ahmed',
    'age'=>'15',
    'class'=>8,
    'section'=>'B'
);

/*
print_r($student);

echo $student['fname']." ".$student['lname']."\n";

printf("%s %s \n",$student['fname'],$student['lname']);
*/

$serialized = serialize($student);
echo $serialized;

echo "\n";

$newstudent = unserialize($serialized);
print_r($newstudent);

echo "\n";

$jsondata = json_encode($student);
echo $jsondata;

echo "\n";

$student2 = json_decode($jsondata,true);
print_r($student2);


