<?php
for($i = 0; $i <=10; $i++){
    echo $i;
    echo PHP_EOL;

    if($i == 6){
        break;
    }
}

echo "=========\n";

for($i = 20; $i <=50; $i++){

    if($i % 13 == 0){
        echo $i;
        echo PHP_EOL;
//        break;
        continue;
    }
}

echo "=========\n";

for($i = 20; $i <30; $i++){

    if($i < 27){
        //continue;  
        goto a;
    }
    echo $i;
    echo PHP_EOL;

a: '';
}