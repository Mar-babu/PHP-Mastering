<?php
$x = 4;
$y = 5;

function greaterOrSmaller($x,$y){
    if ($x>$y){
        return 1;
    }else if($x==$y){
        return 0;
    }else{
        return -1;
    }
}





if(greaterOrSmaller($x,$y)== 1){
    echo "{$x} is gereater than {$y}";
}else if(greaterOrSmaller($x,$y)== 0){
    echo "{$x} is equal to {$y}";
}else if(greaterOrSmaller($x,$y)== -1){
    echo "{$x} is smaller than {$y}";
}
echo PHP_EOL;

echo "=========\n";

$result = $x<=>$y;
if($result == 1){
    echo "{$x} is gereater than {$y}";
}else if($result == 0){
    echo "{$x} is equal to {$y}";
}else if($result == -1){
    echo "{$x} is smaller than {$y}";
}