<?php
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

$fc1 = new FavColor('Some Data');
//$fc2 = $fc1; // copy hoy nai JUST reference hoese
$fc2 = clone $fc1;
$fc2->setData('More Data');

print_r($fc1);
print_r($fc2);
