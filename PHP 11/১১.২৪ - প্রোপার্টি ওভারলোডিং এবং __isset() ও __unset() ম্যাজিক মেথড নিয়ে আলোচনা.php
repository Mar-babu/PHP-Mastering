<?php

/*
class MotorCycle{
//    private $displacement, $capacity, $mileage;

    function __construct($displacement, $capacity, $mileage)
    {
        $this->displacement = $displacement;
        $this->capacity = $capacity;
        $this->mileage = $mileage;
    }

    function getDisplacement(){
        return $this->displacement;
    }

    function setDisplacement($displacement){
        $this->displacement = $displacement;
    }


    // property overloading
    function __get($name)
    {
        echo $this->$name;  //$this->>displacement
        // TODO: Implement __get() method.
    }
    // property overloading

}

$pulsar = new MotorCycle('150cc', '16ltr', '40kmph');

echo $pulsar->getDisplacement();

echo $pulsar->displacement;      // Call property overloading

*/



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
}

$pulsar = new MotorCycle('150cc', '16ltr', '40kmph');

//echo $pulsar->getDisplacement();
//
//echo $pulsar->displacement;      /*Call property overloading */

//$pulsar->displacement = '135cc';
//echo $pulsar->displacement;

if (isset($pulsar->tiresize)){
    echo "Found\n";
}else{
    echo "Not Found\n";
}

unset($pulsar->mileage);