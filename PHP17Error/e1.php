<?php
//error_reporting(0);
//error_reporting(E_ALL);
//error_reporting(E_WARNING);
//error_reporting(E_WARNING | E_NOTICE);   //ei error gula amra php ini file thekeo run korte pari by php --ini or get_cfg_var
//
ini_set("display_errors",0);
ini_set("display_startup_errors",0);
echo 121/0;
echo $book;


//echo get_cfg_var("cfg_file_path"); //ei error gula amra php ini file thekeo run korte pari by php --ini or get_cfg_var


// eroorgulo alada fdile a load kora (php.ini file a (log_errors=On) , (error_log = /tmp/php_error.txt))  see-- by command line in terminal tail -f /tmp/php_error.txt
