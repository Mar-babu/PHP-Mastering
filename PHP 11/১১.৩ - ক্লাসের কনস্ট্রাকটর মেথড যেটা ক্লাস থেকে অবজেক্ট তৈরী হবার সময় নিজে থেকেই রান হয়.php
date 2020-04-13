<?php
class Human{
    public $name;
    public $age;

    function __construct($personName, $personAge)
    {
//        echo "New Human Object Created\n";
        $this->name = $personName;
        $this->age = $personAge;
    }

    function sayHi(){
        echo "Hi, Salam\n";
        $this->sayName();
    }

    function sayName(){
        if ($this->age){
            echo "My Name is {$this->name}, My Age is {$this->age}\n";
        } else {
            echo "My Name is {$this->name}, I don't Know my Age\n";
        }
    }
}

$h1 = new Human("Mar", 26);
$h2 = new Human("Babu", 24);
$h3 = new Human('Ala','');
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();