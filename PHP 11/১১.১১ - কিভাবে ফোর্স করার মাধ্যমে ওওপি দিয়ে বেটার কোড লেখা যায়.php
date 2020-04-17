<?php

class Shape{

}

class Shapes{
    private $shapes;
    function __construct()
    {
        $this->shapes = array();
    }

    function addShape(Shape $shape){    //Inheritance er subidha = Base class ke dhore jekono smy jekhono function a avabe bole dite pari (Je kew argument a pass krte parbe na
        array_push($this->shapes, $shape);
    }

    function totalShapes(){
        return count($this->shapes);
    }
}

class Rectangle extends Shape{

}

class Triangle extends Shape{

}

class Student{

}

$shapesCollection = new Shapes();
$shapesCollection->addShape(new Rectangle());
$shapesCollection->addShape(new Triangle());
//$shapesCollection->addShape(new Student());

echo $shapesCollection->totalShapes();