<?php
echo time();
ECHO PHP_EOL;
echo mktime(0,0,0,12,1,2020);
ECHO PHP_EOL;

date_default_timezone_set("Asia/Dhaka");
echo mktime(0,0,0,12,1,2020);

ECHO PHP_EOL;
echo (mktime(0,0,0,04,15,2020) - mktime(0,0,0,03,30,2020)) / (24*60*60);


