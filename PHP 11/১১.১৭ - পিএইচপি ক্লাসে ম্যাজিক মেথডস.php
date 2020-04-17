<?php
class Students{
    private $name;
    private $age;
    private $class;

    function __construct($name ='', $age ='', $class ='')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($prop)
    {
//        return $this->$prop;
        return strtoupper($this->$prop);

    }

    public function __set($prop, $value)
    {
//        return $this->$prop;
//        return strtoupper($this->$prop = $value);
        return $this->$prop = strtoupper($value);

    }
    /*
        function getName(){
            return $this->name;
        }
        function setName($name){
            $this->name = $name;
        }
        function getAge(){
            return $this->age;
        }
        function setAge($age){
            $this->age = $age;

        }
        function getClass(){
            return $this->class;
        }
        function setClass($class){
            $this->class = $class;
        }
    */

}

$r = new Students('Rahim', '16', '10');
//$r = new Students();
//$r->setName("Rahim");
//$r->getName();
$r->age;

$r->name = "Kamal";