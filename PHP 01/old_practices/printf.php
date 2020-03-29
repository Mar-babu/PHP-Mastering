<?php
$fname = "Sir";
$middlename = 'Issac';
$lname = 'Newton';

//printf("His name is %s %s", $lname, $fname);
/*printf('His name is %3$s %1$s %2$s', $fname, $middlename, $lname);
echo "\n";
printf('The binary equivalent of %1%d is %1$b',12);*/


$n = 45.121;
printf("%.2f",$n);
echo "\n";

$a = 123.3253; //0123
$b = 27.155; //0023

printf("%08d.2f \n",$a);
printf("%07d.2f \n",$b);