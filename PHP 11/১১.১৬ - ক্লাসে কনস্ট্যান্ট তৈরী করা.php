<?php
define('OK',123);
const CITY = "Dhaka";
//define('OK',123); //2 bar defin e kora jabena

//echo "OK";


class MyClass{
    const CITY = "Dhaka\n"; //Constant sobsomoy static scope a thake

    function sayHi(){
        echo "Hi from".self::CITY ;
        echo "Hi from".$this::CITY ;
    }
}

$m = new MyClass();
//$m->CITY;  //na avabe hobena Coz   Constant sobsomoy static scope a thake
echo $m::CITY;  // Avabe likhte hobe
echo MyClass::CITY;
$m->sayHi();