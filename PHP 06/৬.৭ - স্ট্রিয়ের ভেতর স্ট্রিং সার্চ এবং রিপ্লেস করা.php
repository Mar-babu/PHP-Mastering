<?php

$string = "Quick brown Brown Fox Jumps Over The Lazy Dog";

$replaceSrting = str_ireplace(array('brown','fox', 'dog'), 'cat', $string, $count);
//$replaceSrting = str_ireplace(array('brown','fox'), array('red', 'cat'),$string, $count);
//$replaceSrting = str_ireplace('brown','red',$string, $count);
//$replaceSrting = str_replace('brown','red',$string);
echo $replaceSrting;
echo PHP_EOL;

echo "Total replacement: {$count}";