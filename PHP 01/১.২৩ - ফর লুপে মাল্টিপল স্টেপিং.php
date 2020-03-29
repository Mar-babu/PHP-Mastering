<?php
for($i = 10; $i > 0; $i-=1){
    echo $i.":".(10-$i);  //echo $i;
    echo PHP_EOL;
}

echo "\n";

for($i = 10, $j = 1; $i > 0; $i-=1, $j++){
    echo $i.":".$j;
//    echo $i.":".(11-$i);
    echo PHP_EOL;
}
