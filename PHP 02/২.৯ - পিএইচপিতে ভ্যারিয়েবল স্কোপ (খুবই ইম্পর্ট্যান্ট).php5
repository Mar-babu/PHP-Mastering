<?php
/**
 * Created by PhpStorm.
 * User: Mukta
 * Date: 3/26/2020
 * Time: 3:19 PM
 */
//$name = "Earth";   //Global Scope
//
//function doSomething(){
////    global $name;
////    echo $name;
//    echo $GLOBALS['name'];
//}
//doSomething();

/*function doSomething(){
    global $name;
    $name = "Earth";  //Local Scope
}
doSomething();
echo $name;*/

function doSomething(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}
function doExtra(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}

doSomething();
doSomething();
doSomething();
doSomething();
doExtra();
doExtra();
doSomething();
doExtra();


