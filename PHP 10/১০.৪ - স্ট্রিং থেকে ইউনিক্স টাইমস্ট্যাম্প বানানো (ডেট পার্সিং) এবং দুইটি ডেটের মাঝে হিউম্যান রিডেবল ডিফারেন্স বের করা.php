<?php
echo mktime(0,0,0,03,18,1994)."\n";
echo strtotime("18 March, 1994")."\n";
//echo strtotime("30 March, 2020")."\n";
echo time()."\n";
echo strtotime("Now")."\n";
echo strtotime("+3days")."\n";

echo (strtotime("+3days") - strtotime("Now")) / (86400);
echo PHP_EOL;
echo (strtotime("+2 weeks 7 days 24 hours 86400 seconds") - strtotime("Now")) / (86400);
