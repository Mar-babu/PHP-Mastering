<?php
$filename = "C:/xampp/htdocs/Php/PHP 07/data/f5.txt";

file_put_contents($filename, "Mars\n", FILE_APPEND | LOCK_EX);