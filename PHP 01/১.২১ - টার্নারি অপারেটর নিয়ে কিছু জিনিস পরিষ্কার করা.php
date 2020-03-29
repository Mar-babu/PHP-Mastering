<?php
$n = 10;
$result = ($n % 2 == 0) ? "A" : (($n == 11) ? "B" : "C");     // $result = ("A") ? "B" : "C";   / $result = (($n % 2 == 0) ? "A" : ($n == 11)) ? "B" : "C"; 
echo $result;