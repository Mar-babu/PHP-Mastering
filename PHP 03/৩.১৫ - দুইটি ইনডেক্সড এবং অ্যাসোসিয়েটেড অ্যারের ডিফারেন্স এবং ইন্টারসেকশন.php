<?php

//$fruits = array('apple','banana','orange','plum','dates','mango');
$fruits1 = array('a'=>'apple','b'=>'banana','f'=>'orange','c'=>'plum','d'=>'dates','m'=>'mango');
$fruits2 = array('d'=>'apple','b'=>'banana','f'=>'orange','e'=>'plum','d'=>'malta','m'=>'lemon');

$numbers1 = array(55,12,2,22,2,33,2,568,77);
$numbers2 = array(55,2,22,2,568,77);

$common = array_intersect($numbers1, $numbers2);
//$commonf = array_intersect($fruits1, $fruits2);
$commonf = array_intersect_assoc($fruits1, $fruits2);

print_r($common);
print_r($commonf);

$diffff = array_diff_assoc($fruits1, $fruits2);
//$diff = array_diff($numbers1, $numbers2);
$diff = array_diff($numbers1, $numbers2);
print_r($diffff);
print_r($diff);