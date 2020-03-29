<?php
$filename = "C:/xampp/htdocs/Php/PHP 07/data/f8.txt";
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

//$encodeData = json_encode($students);
//file_put_contents($filename, $encodeData, LOCK_EX);

$data = file_get_contents($filename);
//$allStudents = json_decode($data);
$allStudents = json_decode($data, true);
print_r($allStudents);
//echo $allStudents[0]->fname;
echo PHP_EOL;
echo $allStudents[2]['fname'];