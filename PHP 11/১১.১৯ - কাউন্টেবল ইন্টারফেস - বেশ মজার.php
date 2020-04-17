<?php
class DistrictsCollection implements IteratorAggregate, Countable {
    private $districts;

    function __construct(){
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts, $district);
    }

//    function getDistricts(){
//        return $this->districts;
//    }

    function getIterator()
    {
        return new ArrayIterator($this->districts);
    }

    function count()
    {
        return count($this->districts);
    }
}

$districts = new DistrictsCollection();
$districts->add("Tangail");
$districts->add("Rajshahi");
$districts->add("Sirajganj");


//foreach($districts as $district){
//    echo $district."\n";
//}

echo count($districts);