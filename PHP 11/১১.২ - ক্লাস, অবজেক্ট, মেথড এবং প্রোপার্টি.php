<?php
class Human{
    public $name;
    function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }
    function sayName(){
        echo "My name is {$this->name}\n";
    }
}

class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}

class Dog{
    function sayHi(){
        echo "Woof\n";
    }
}

$h1 = new Human();
$h2 = new Human();
$h1->name = "Abdur Rahim";   //set
$h2->name = "Babu";
//$c1 = new Cat();
//$d1 = new Dog();

$h1->sayHi();
//$h1->sayName();
//echo $h1->name."\n";//get
//$c1->sayHi();
//$d1->sayHi();

$h2->sayHi();
//$h2->sayName();
//echo $h2->name."\n";