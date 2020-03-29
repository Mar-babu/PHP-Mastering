<?php
$string = "10 balls";
switch($string){
    case "9 balls":
        echo "Nine balls";
        break;
    case 10:        //case "10":
        echo "10";
        break;
    case "10 balls":
        echo "Ten balls";
        break;
}

echo "\n";

switch($string){
    case (string) "9 balls":
        echo "Nine balls";
        break;
    case (string)  10:
        echo "10";
        break;
    case (string)  "10 balls":
        echo "Ten balls";
        break;
}

