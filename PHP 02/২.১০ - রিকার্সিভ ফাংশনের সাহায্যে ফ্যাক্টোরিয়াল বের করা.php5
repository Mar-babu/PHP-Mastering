<?php
/**
 * Created by PhpStorm.
 * User: Mukta
 * Date: 3/26/2020
 * Time: 3:44 PM
 */
function factorial($n){
    if($n <= 1){
        return 1;
    }
    return $n * factorial($n - 1);

}
echo factorial(5);

//5 * 4 * 3 * 2 * factorial (1)