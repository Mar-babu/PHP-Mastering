<?php


//$name='';
//$name=null;
//$name='earth';
$name=false;
//$name;

if(isset($name)){
    echo "Name is set";
}else{
    echo "Not set";
}

echo "\n";

if(empty($name)){
    echo "Name is set";
}else{
    echo "Not set";
}


echo "\n";


if(isset($name) && (is_numeric($name) || $name !='')){
    echo "Name is set and it's not empty";
}else{
    echo 'Name is either not set and it\'s not empty';
}