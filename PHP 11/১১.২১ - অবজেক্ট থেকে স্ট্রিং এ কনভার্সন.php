<?php
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

    function __toString()
    {
        return "The color is {$this->color}.\n";
        // TODO: Implement __toString() method.
    }
}

$c = new Color('red');
//echo $c;  // object ke echo kora jabena
echo serialize($c)."\n";  // serialize kore korle object ke echo kora jabe
echo $c;  // toString Function use kore object ke echo kora jabe