<?php

/*
function doThelargerTask(){
    echo "Step A done \n";
    echo "Step B done \n";
    echo "Step C done \n";
    echo "Step D done \n";
    echo "Step E done \n";   

}

doThelargerTask();
*/


function doTaskA(){
    echo "Step A done \n"; 
}

function doTaskB(){
    echo "Step B done \n"; 
}
function doTaskC(){
    echo "Step C done \n"; 
}
function doTaskD(){
    echo "Step D done \n"; 
}
function doTaskE(){
    echo "Step E done \n"; 
}
function doThelargerTask(){
    doTaskA();
    doTaskB(); 

}

doThelargerTask();