<?php 
//echo "Hello World";
//$name = 'Bangladesh';
//$age = 26;
//$question = "How Are You";
//
//$word = 'age';
//
//echo $$word;
//echo '<br>';
//echo 'Hello ' .$name." ".$question;
//echo '<br>';
//echo "Hello $name";
//echo '<br>';
//echo "Hello {$name}, {$question}?";

//define('PI',3.14159);
//$task = 'Read';
//echo $task;
//echo "<br>";
//$task = 'Write';
//echo $task;
//echo "<br>";
//
////echo "Value of PI = {PI}".PI;
////echo "<br>";
////echo constant('PI');
//
//$constant = 'constant';
//echo "Value of PI = {$constant('PI')}";
/*
Integer
Double/Float
Boolean
Array
String
Object
Resource
 */
//$name = " ";
//var_dump($name);
//echo "<br>";
//$result = true;
//var_dump($result);
//echo "<br>";
//$name = "Earth";
//uname = strtoupper($name);
//echo "We're Living on {$uname}";
//echo "<br>";
//printf("We're living on %s",$uname);
//$fname = "mar";
//$lname = "babu";
//echo "<br>";
//printf("His %s name is %s %s","Full",$fname,$lname);

//$number = 15;
//$number = $number + 12;
//$number = $number += 12;
//$number += 12;
//$number =+ 12;
//$number /= 5;

//echo $number;
/*
$n = 12;
$o = 017;
$h = 0x1B;
printf("The binary equivalent of %d is %b",12,12);
echo "<br>";
printf("The hexadecimel equivalent of %d is %X",1212,1212);
echo "<br>";
printf("The octal equivalent of %d is %o",27,27);
echo "<br>";
printf("The octal equivalent of %d is %o",65536,65536);
*/

$fname = "Isaac";
$lname = "Newton";

$output = sprintf("His name is %s %s", $fname, $lname);

echo $output;
echo "<br>";
echo strtoupper($output);