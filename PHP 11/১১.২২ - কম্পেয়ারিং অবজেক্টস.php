<?php
class Planet{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}

$e = new Planet("Earth");
$e2 = $e;
$e1 = new Planet("Earth");
$m = new Planet("Corona");

//if ($e == $m){
//if ($e == $e1){
//if ($e === $e1){
//if ($e1 == $e2){
if ($e1 === $e2){
    echo "Similar planets";
}else{
    echo "Not Similar";
}