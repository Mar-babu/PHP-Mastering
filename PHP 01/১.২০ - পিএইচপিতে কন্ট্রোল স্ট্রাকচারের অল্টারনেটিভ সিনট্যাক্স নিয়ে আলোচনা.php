<?php
$n = 12;

/*
if ($n%2==0){
    echo "Even number";
}
else{
    echo "Odd number";
}
echo PHP_EOL;


echo "<br>";

if($n%2==0):
    echo "Even number";
    echo PHP_EOL;
    echo "Some text";

else:
    echo "Odd number";
    echo PHP_EOL;
    echo "Some text";
endif;


echo "<br>";


switch ($n%2):
    case 0:
    echo "Even";
    break;
    default:
    echo "Odd";
endswitch;
*/


if($n%2==0):
    ?>
    Even number
    Some text
    <?php
else:
    ?>
    Odd number
    Some Text
    <?php
endif;

echo "<br>";


if($n%2==0){
    ?>
    Even number
    Some text
    <?php
}else{
    ?>
    Odd number
    Some Text
    <?php
}
