<?php

$name = "Abul Hossain 01234567891 abc@defgmail.com";

$parts = sscanf($name, "%s %s %11s %s");
//$parts = sscanf($name, "%s %s %11d");

print_r($parts);


sscanf($name, "%s %s %11s %s", $fname, $lname, $mobile, $email);
echo $email;

echo PHP_EOL;

$hexColor = "#FF2F44";
sscanf($hexColor, "#%2x%2x%2x", $red, $green, $blue);
echo $red;

