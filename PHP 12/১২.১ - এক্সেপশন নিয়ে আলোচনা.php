<?php
class Student{
    function __construct($name, $age)
    {
        $this->name = $name;
        if ($age<4){
//            throw new Exception("Invalid Age");
            throw new Exception("Invalid Age", 1404);
        }elseif($age>35){
            throw new Exception("Too old", 1402);


        }
        $this->age = $age;
    }
}

try{
    $s = new Student('Rahim', 38);
}catch(Exception $exception){
    echo $exception->getCode().":".$exception->getMessage();
}finally{
    echo "It will run";
}
