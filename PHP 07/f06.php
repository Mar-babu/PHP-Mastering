<?php
$filename = "C:/xampp/htdocs/Php/PHP 07/data/f6.txt";
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
/*
$fp = fopen($filename, "w");
foreach($students as $student){
    $data = sprintf("%s %s %s %s %s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
    fwrite($fp, $data);
}
fclose($fp);
*/
/*
$fp = fopen($filename, "r");
while($data = fgets($fp)){
    $student = explode(",", $data);
    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0],$student[1],$student[2],$student[3]);
}
fclose($fp);
*/
/*
$fp = fopen($filename, "w");
foreach($students as $student){
//    $data = sprintf("%s %s %s %s %s\n", $student['fname'], $student['lname'], $student['age'], $student['class'], $student['roll']);
//    fwrite($fp, $data);
    fputcsv($fp, $student);
}
fclose($fp);

*/
/*
$fp = fopen($filename, "r");
while($student = fgetcsv($fp)){
//    $student = explode(",", $data);
    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n", $student[0],$student[1],$student[2],$student[3]);
}
fclose($fp);*/
/*
$student =
    [
        'fname' => 'Kamal',
        'lname' => 'Ahmed',
        'age' => 12,
        'class' => 7,
        'roll' => 11
    ];
$fp = fopen($filename, "a");
fputcsv($fp, $student);
fclose($fp);
*/

$data = file($filename);
unset($data[1]);
print_r($data);
$fp = fopen($filename, "w");

foreach ($data as $line){
    fwrite($fp, $line);
}
fclose($fp);
