<?php
$ch = curl_init('https://docs.google.com/forms/u/1/d/e/1FAIpQLSfsVl4EiXiFPrR0EesXxEqB57Wuah6rnAsmGPFkVj8VdGWnVA/formResponse');

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS,"entry.1992198361=Covid19&entry.1887067093=709&entry.664215373=Bangladesh&entry.1469693035=Virus&entry.622712852=Health&entry.1826249838=Disease&entry.807378814=N/a&entry.1185553427=2020&entry.1376657430=fb.com/corona");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


$result = curl_exec($ch);
if (curl_error($ch)){
    echo curl_error($ch);
}else{
    echo $result;
}