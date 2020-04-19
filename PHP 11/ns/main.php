<?php
namespace Astronomy;
include "planet.php";
include "earth.php";
$planet = new Planets\Earth(); //unqualified
//$planet = new \Astronomy\Planets\Planet(); //qualified
$planet->getName();




//2020-04-18