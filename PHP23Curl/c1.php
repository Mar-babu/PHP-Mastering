<?php
$ch = curl_init('localhost/Php/PHP23Curl/hello.php');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS,'secret=khida lagse');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);  //external link theke material jodi variable a rekhe korte chan tahle true kore nite hobe, defaultly false thake
//curl_exec($ch);
$var = curl_exec($ch);
//echo strlen($var);
//echo $var;
echo strtoupper($var);
