<?php
/**
 * Created by PhpStorm.
 * User: Mukta
 * Date: 3/29/2020
 * Time: 3:47 PM
 */

$filename = "C:/xampp/htdocs/Php/PHP 07/data/f2.txt";
//echo getcwd();
/*
$existingData = file_get_contents($filename);

$fp = fopen($filename, "w");
fwrite($fp, $existingData."\n");
fwrite($fp, "Venus\n");
fwrite($fp, "Mars\n");
*/

$fp = fopen($filename, "a");
fwrite($fp, "Venus\n");
fwrite($fp, "Mars\n");

fclose($fp);