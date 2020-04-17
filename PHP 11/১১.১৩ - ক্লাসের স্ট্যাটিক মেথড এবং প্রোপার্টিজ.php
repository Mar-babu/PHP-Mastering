<?php
class MathCalculator{
    static function fibonacci($n){
        echo "Fibonacci series up to ($n)\n";
    }
    function factorial($n){

    }
}

$mathc = new MathCalculator();
$mathc->fibonacci(8);

MathCalculator::fibonacci(7);