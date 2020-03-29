<?php
echo "Hello world\n";

$country = "Bangladesh";
$myName = 'Abdur Rahman';
$age = 25;
$question = "How Are you?";
$word = "age";

echo $$word;
echo "\n";

echo 'Hello $country';
echo "\n";
echo 'Hello'.$country;
echo "\n";
echo "Hello $country";
echo "\n";
echo "Hello {$myName}, {$question}\n";
echo "Hello {$myName}, {$question}\n";