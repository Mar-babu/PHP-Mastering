<?php
$i = 0;
while($i < 5){
    echo $i;
    echo PHP_EOL;
    $i++;
}

echo "=========\n";

$j = 0;
while($j++ < 5){
    echo $j;
    echo PHP_EOL;
}

echo "=========\n";

$j = 0;
while(++$j < 5){
    echo $j;
    echo PHP_EOL;
}


echo "=========\n";

$y =5;
$x = $y++;
$x = $y;
$y = $y + 1;

//echo $x, "\n", $y;
echo $x.":". $y;