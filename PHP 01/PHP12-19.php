<?php
/*
$n = 13;
if ($n % 2 == 0){
    echo "$n is an even number";
}else{
    echo "$n is an odd number";
}

if ($n > 10){
    echo "$n is greater than 10";
}
*/
/*
$alam = 100;
$rahim = 100;

if ($alam == $rahim){
    echo "Alam has same amnount of money as Rahim";
}elseif ($alam>$rahim){
    echo "Alam has more money than Rahim";
}elseif ($alam<$rahim){
    echo "Alam has less money than Rahim";
}elseif ($alam>=$rahim){
    echo "Alam has same or more money than Rahim";
}
*/
/*
$age = 10;

if($age<=19 && $age>=13 ){
    echo "This person is a teenager";
}else{
    echo "This person is not a teenager";
}
*/
/*
$food = "apple";

if ("tuna" == $food){
    echo "It has vitamin D";
}else{
    echo "We don't know if it contain vitamin D";
}
*/
/*
$food = "tuna";

if ("tuna" == $food || "salmon" == $food){
//if ("tuna" == $food && "salmon" == $food){
    echo "It has vitamin D";
}elseif("apple" == $food){
    echo "Apple doesn't contain vitamin D";
}
else{
    echo "We don't know if {$food} contain vitamin D";
}
*/



//=====Leap year=====
//1-divisible by 4
//2-divisible by 100
//2-divisible by 400
/*
$year = 2018;
if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "{$year} is a leap year";
}elseif($year % 4 == 0 && $year % 100 == 0){
    echo "{$year} is not a leap year";
}
elseif($year % 4 == 0){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}
*/
//$year = 2012;
//if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
//    echo "{$year} is a leap year";
//}else{
//    echo "{$year} is not a leap year";
//}

//ternary operator
/*
$n = 12;
if (12 == $n){
    echo "Twelve";
}else if (10 == $n){
    echo "Ten";
}else{
    echo "A number";
}

echo "<br>";

//$numberInWord = 12 == $n ? "Twelve" : "A number";
$numberInWord = (12 == $n) ? "Twelve" : (10 == $n) ? "Ten" : "A number";
echo "$numberInWord";

echo "<br>";

if ($n % 2 == 0){
    echo "Even number";
}else{
   echo "Odd number";
}
echo "<br>";

$evenOrOdd = $n % 2 == 0 ? "even" : "odd";
echo "$evenOrOdd";

*/

//Switch Case
/*
$n = 14;
$r = 14 % 2;

switch ($r){
    case 0:
        echo "{$n} is an even number";
    break;
    default:
        echo "{$n} is an odd number";
}
*/
/*
$color = "green";
switch ($color){
    case "red":
    case "green":
        echo ucwords($color)." is our favourate color";
        break;
    case "blue":
        echo "Blue is not our favourate color";
        break;
    default:
        echo "This color is ok";
}
*/

//Nested switch Case
/*
$n = 105;
$r = $n % 2;

switch ($r){
    case 0:
        switch ($n){
            case $n>0:
                echo "$n is a positive even number";
                break;
            case $n<0:
                echo "$n is a negative even number";
                break;
        }
        break;
    default:
        switch($n){
            case $n>0:
                echo "$n is a positive odd number";
                break;
            case $n<0:
                echo "$n is a negative odd number";
                break;
        }

}
*/

/*
echo "<br>";

$n = -105;
$r = $n % 2;
//$r = abs($n) % 2;
switch (true){
    case ($r == 0 && $n>0):
        echo "$n is a positive even number";
        break;
    case ($r == 0 && $n<0):
        echo "$n is a negative even number";
        break;
    case ($r == 1 && $n>0):
        echo "$n is a positive odd number";
        break;
    case ($r == -1 && $n<0):
//    case ($r == 1 && $n<0):
        echo "$n is a negative odd number";
        break;
}
*/

//fun Switch case
/*
$count = "8balls";
switch ($count){
    case "9balls":
        echo "9 balls";
        break;
    case 8:
        echo "8";
        break;
    case "8balls":
        echo "8 balls";
        break;
}
echo "<br>";

$count = "8balls";
switch ($count){
    case (string) "9balls":
        echo "9 balls";
        break;
    case (string) 8:
        echo "8";
        break;
    case (string) "8balls":
        echo "8 balls";
        break;
}

*/

//Operator precedence

//$f = false || true;  // true
//$e = false or true; // ($e = false) or true / $e = false
//
//var_dump($f, $e);

$f = false && true;  // false
$e = false and true; // ($e = false) and true / $e = false

var_dump($f, $e);