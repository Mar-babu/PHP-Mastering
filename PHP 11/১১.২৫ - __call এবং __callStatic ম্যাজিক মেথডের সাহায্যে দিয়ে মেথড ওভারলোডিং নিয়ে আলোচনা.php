<?php
class MotorCycle{
    private $perameters = [];

    function __construct($displacement, $capacity, $mileage)
    {
        $this->perameters['displacement'] = $displacement;
        $this->perameters['capacity'] = $capacity;
        $this->perameters['mileage'] = $mileage;
    }

//    function getDisplacement(){
//        return $this->perameters['displacement'];
//    }
//
//    function setDisplacement($displacement){
//        $this->perameters['displacement'] = $displacement;
//    }


    function __isset($name)
    {
        if (!isset($this->perameters[$name])){
            echo "{$name} not found\n";
            return false;
        }
        return true;
        // TODO: Implement __isset() method.
    }


    function __unset($name)
    {
        print_r($this->perameters);
        unset ($this->perameters[$name]);
        print_r($this->perameters);

        // TODO: Implement __unset() method.
    }

    /* property overloading */
    function __get($name)
    {
        echo $this->perameters[$name] ;  //$this->displacement
        // TODO: Implement __get() method.
    }
    /* property overloading */


    function __set($name, $value)
    {
        echo $this->perameters[$name] = $value;
        // TODO: Implement __get() method.
    }

    function __call($name, $arguments) //(Ak matro tokhoni run korse jokhon method ta Class a nai) //ata thakle fatal error pabo na
    {
        if ('run' == $name){
            if ($arguments){
                echo "I am running at {$arguments[0]}";
            }else{
                echo "I am running";
            }
        }
    }


    static function __callStatic($name, $arguments){  //Alternative of __call
        echo "Static Call";
    }
}


MotorCycle::wash();


$pulsar = new MotorCycle('150cc', '16ltr', '40kmph');


if (isset($pulsar->tiresize)){
    echo "Found\n";
}else{
    echo "Not Found\n";
}

unset($pulsar->mileage);
//$pulsar->run();  //ata thakle fatal error pabo na
$pulsar->run('100kmph');  //ata thakle fatal error pabo na