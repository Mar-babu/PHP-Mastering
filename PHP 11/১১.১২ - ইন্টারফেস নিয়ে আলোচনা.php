<?php

interface BaseAnimal{
    function isAlive();
    function catEat($param1, $param2);
    function bread();
}

class Animal implements BaseAnimal{
    function isAlive()
    {}
    function catEaT($param1, $param2)
    {}
    function bread()
    {}
}

interface BaseHuman extends BaseAnimal{
    function canTalk();
}
/*
class Human implements BaseHuman{
    function isAlive()
    {}
    function catEat($param1, $param2)
    {}
    function bread()
    {}
    function canTalk()
    {}
}
*/

//$h = new Human();
//echo $h instanceof BaseAnimal;
//echo $h instanceof BaseHuman;

//$cat = new Animal();
//echo $cat instanceof Human;
//echo $cat instanceof BaseAnimal;

abstract Class AbstractHuman implements BaseHuman{
    abstract public function run();
    function eat(){
        echo "I am Eating";
    }
}

class Human extends AbstractHuman {
    function isAlive()
    {}
    function catEat($param1, $param2)
    {}
    function bread()
    {}
    function canTalk()
    {}
    function run()
    {}
}

$h = new Human();