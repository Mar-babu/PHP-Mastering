<?php
/**
 * Created by PhpStorm.
 * User: Mar babu
 * Date: 11/17/2019
 * Time: 5:54 PM
 */
//$filename = "J:/LWHH/Php/file/data/f1.txt";
$filename = "C:/xampp/htdocs/Php/PHP 07/data/f1.txt";
//echo getcwd();

$fp = fopen($filename,'r');
//$line = fgets($fp,8);
//echo  $line;
while($line = fgets($fp))
{
    echo $line;
}


//rewind($fp);
//fseek($fp,10);
//fseek($fp,-1,SEEK_END);
while($line = fgets($fp))
{
    echo $line;
}
fclose($fp);


