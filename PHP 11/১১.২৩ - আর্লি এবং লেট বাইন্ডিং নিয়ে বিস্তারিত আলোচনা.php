<?php
/*
class Planet{
    static function echoName(){
        echo self::getName();
    }

    static function getName(){
        return"Planet";
    }
}

class Earth extends Planet{

}

Planet::echoName();
*/


class Planet{
    static function echoName(){
//        echo self::getName();   //Self jake deya ase takei call hobe
        echo static::getName();   //Kintu jodi child class ke refer korte chai Tahle self na dye static dite hobe
    }

    static function getName(){
        return "Planet";
    }
}

class Earth extends Planet{
    static function getName(){
        return "Earth";
    }
}

//Planet::echoName();
Earth::echoName();   //earth theke call kora hoyese



//Porer ta binding || Child er majhe jodi kono method thake take bind korake = Late binding

//Self diye Parent er ta bind kore call korle Sei class tai refer korbe || override kore Self takei bind korbe = Early Binding