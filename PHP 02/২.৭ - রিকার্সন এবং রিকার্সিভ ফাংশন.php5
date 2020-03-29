<?php
/**
 * Created by PhpStorm.
 * User: Mukta
 * Date: 3/26/2020
 * Time: 2:28 PM
 */

function printN($i){
    if($i>=11){
        return;
    }
    echo $i."\n";

    $i++;
    printN($i);

}
//printN(0);

function Number($counter, $end, $stepping /*=1*/){
    if($counter>$end){
        return;
    }
    echo $counter."\n";
//    $counter++;
    $counter += $stepping;

    Number($counter, $end, $stepping);
}

Number(20,37, 2);
