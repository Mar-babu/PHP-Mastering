<?php
/**
 * Created by PhpStorm.
 * User: Mukta
 * Date: 3/26/2020
 * Time: 3:05 PM
 */

function fibonacci($old, $new, $start, $end){
//function fibonacci($old, $new, $end){
   /* static $start;
    $start = $start ?? 1;
    */
    if($start>$end){
        return;
    }
    $start++;
    echo $old." ";

    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $start, $end);
//    fibonacci($old, $new, $end);
}
fibonacci(0,1,1,15);
//fibonacci(0,1, 10);
