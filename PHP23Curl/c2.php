<?php
//phpinfo();
$ch = curl_init("https://www.bubt.edu.bd");
//curl_exec($ch);
//curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);    //long term a php.ini te curl.cainfo te kaj korte hobe
$result = curl_exec($ch);
$error = curl_error($ch);
if($error){
    echo $error;
}