<?php
$n = 6;
$result = 1;
$j = 1;
for($n = 1; $n<=10; $n++){
    for($i = $n; $i > 1; $i--){
        $result *= $i;
        $j++;

    }
    echo "Factorial of {$n} is {$result} \n";
}
echo "Total {$j} number of operations \n";

echo "\n";

$result = 1;
$j = 1;
for($n = 1; $n<=10; $n++){
    $result *= $n;
    $j++;
    echo "Factorial of {$n} is {$result} \n";
}
echo "Toatal {$j} number of operations \n";