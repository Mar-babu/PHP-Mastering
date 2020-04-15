<?php
class Animal{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat(){
        echo "{$this->name} is eating\n";
    }

    public function run(){
        echo "{$this->name} is running\n";
    }

    public function sleep(){
        echo "{$this->name} is sleeping\n";
    }

    public function greet(){}

    protected function addTitle($title){
        $this->name = $title . " " . $this->name;
    }
}
/*
class Human {
    public function eat(){
        echo "I am eating";
    }

    public function run(){
        echo "I am running";
    }

    public function sleep(){
        echo "I am sleeping";
    }
}

class Cat {
    public function eat(){
        echo "I am eating";
    }

    public function run(){
        echo "I am running";
    }

    public function sleep(){
        echo "I am sleeping";
    }
}
*/


class Human extends Animal {
    public function greet(){
        $this->addTitle("Mr.");
        echo "{$this->name} says Hi\n";
    }
}

class Cat extends Animal {
    public function greet(){
        $this->addTitle("Mr.");
        echo "{$this->name} says Meow\n";
    }
}

$babu = new Human("Babu");
$babu->eat();
echo $babu->greet();

$cat1 = new Cat("Tommy");
echo $cat1->greet();