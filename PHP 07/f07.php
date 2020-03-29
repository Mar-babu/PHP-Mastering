<?php
$filename = "C:/xampp/htdocs/Php/PHP 07/data/f7.txt";
$students = [

    [
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age' => 12,
        'class' => 7,
        'roll' => 11
    ],

    [
        'fname' => 'Rahim',
        'lname' => 'Mia',
        'age' => 23,
        'class' => 11,
        'roll' => 01

    ],

    [
        'fname' => 'Babu',
        'lname' => 'Boss',
        'age' => 25,
        'class' => 17,
        'roll' => 48
    ],

];
$student =
    [
    'fname' => 'Babu',
    'lname' => 'Boss',
    'age' => 25,
    'class' => 17,
    'roll' => 48
    ];
//$data = serialize($students);
//file_put_contents($filename, $data, LOCK_EX);

$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);

//unset($allStudents[1]);
//$data = serialize($allStudents);
//file_put_contents($filename, $data, LOCK_EX);

//array_push($allStudents, $student);
//$data = serialize($allStudents);
//file_put_contents($filename, $data, LOCK_EX);
