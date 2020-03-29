<?php

//$fruits = array('apple','banana','orange','plum','dates','mango');
$fruits = array('a'=>'apple','b'=>'banana','f'=>'orange','c'=>'plum','d'=>'dates','m'=>'mango');
$numbers = array(55,12,2,22,2,'3',33,2,568,77);

//if(in_array(3,$numbers,true)){
    if(in_array(3,$numbers)){   //srtict mood
    echo '3 is found'."\n";

    
}


//$offset = array_search(3,$numbers),true;
$offset = array_search(2,$numbers);
echo $offset;

echo"\n";

if (key_exists('b',$fruits)){
    echo "key b exists";
}