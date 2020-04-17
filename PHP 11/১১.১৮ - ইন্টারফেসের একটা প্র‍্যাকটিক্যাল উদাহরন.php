<?php
class DistrictCollection implements IteratorAggregate{
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
}

$districts = new DistrictCollection();
$districts->add("Tangail");
$districts->add("Rajshahi");
$districts->add("Sirajganj");

//$_districts = $districts->getDistricts();  //temporary variable
//print_r($_districts);

//foreach($_districts as $district){
//    echo $district."\n";
//}
foreach($districts as $district){
    echo $district."\n";
}