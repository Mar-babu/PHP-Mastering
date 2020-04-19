<?php
trait MyTrait{
    static $number;
    abstract function sayHi();
}

class MyclassA{
    use MyTrait;

    function sayHi()
    {
        echo "Hi";
    }
}

class MyclassB{
    use MyTrait;

    function sayHi()
    {
        echo "Hi++";
    }
}

MyClassA::$number = 2;
MyClassB::$number = 8;

echo MyClassA::$number;
echo MyClassB::$number;

$ma = new MyclassA();
echo $ma::$number;

//19-04-2020