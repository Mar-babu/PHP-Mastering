<?php
abstract class OurClass{
    function doSomething(){  //function = override hobe
//    final function doSomething(){  //final = implement kora jabena
        echo "Do something";
    }
}

class MyClass extends OurClass{
    function doSomething(){
        echo "Do nothing";
    }
}

$mc = new MyClass();
$mc->doSomething();