<?php

/*
class FavColor{
    public $data;



    function __construct($data)
    {
        $this->data = $data;
    }


    function setData($data)
    {
        $this->data = $data;
    }
}
*/




/*
$fc1 = new FavColor('Some Data');
//$fc2 = $fc1; // copy hoy nai JUST reference hoese
$fc2 = clone $fc1;  //notun object toiri hoye clone

print_r($fc1);
print_r($fc2);

$fc2->setData('More Data');
print_r($fc1);
print_r($fc2);
*/




class Color{
    public $color;

    function __construct($color)
    {
        $this->color = $color;
    }

    function setColor($color)
    {
        $this->color = $color;
    }
}

class FavColor{
    public $data;
    public $color;


    function __construct($data, $color)
    {
        $this->data = $data;
        $this->color = new Color($color);
    }

    function updateColor($color){
        $this->color->setColor($color);
    }

    function __clone()
    {
        $this->color =clone $this->color;
        // TODO: Implement __clone() method.
    }

    function setData($data)
    {
        $this->data = $data;
    }
}


$fc1 = new FavColor('Some Data', 'red');
print_r($fc1);
$fc2 = clone $fc1;
print_r($fc2);
$fc2->updateColor('green');
print_r($fc1);
print_r($fc2);
