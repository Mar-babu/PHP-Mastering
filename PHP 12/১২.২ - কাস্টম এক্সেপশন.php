<?php
class Myexception extends Exception{}
class NetworkException extends Exception{}

function testExceptions(){
    throw new Myexception();
}

try{
    testExceptions();
}catch(Myexception $e){
    echo "MyException caught";
}catch(NetworkException $e){
    echo "NetworkException caught";
}catch(Exception $e){
    echo "Exception caught";
}finally{
    echo "Cleaned up";
}