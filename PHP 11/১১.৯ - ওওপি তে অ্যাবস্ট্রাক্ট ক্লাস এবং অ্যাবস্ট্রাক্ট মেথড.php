<?php

/*
abstract class Shape {
    abstract function getArea();
    abstract function getPerimeter();
}

class Rectangle extends Shape {
    private $base;
    private $height;

    function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base){
        $this->base = $base;
    }

    public function setHeight($height){
        $this->height = $height;
    }

    function getArea(){
        return $this->base * $this->height;
    }

    function getPerimeter(){

    }
}

class Triangle extends Shape{
    function getArea(){
        return $this->base * $this->height;
    }

    function getPerimeter(){

    }
}

$triangle = new Rectangle(10,10);
echo $triangle->getArea();
*/

abstract class OurClass{
    function sayHi(){
        echo "Hi";
    }

//    abstract function eat();
    abstract function eat($v1, $v2=0);

}


class MyClass extends OurClass{

//    function eat(){
    function eat($m, $n=5){
        echo "I am eating";
    }
}


$mc = new MyClass();
$mc->eat(1, 2);