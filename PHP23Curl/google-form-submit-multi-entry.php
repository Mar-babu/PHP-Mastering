<?php
$data = [
    [
        'name' => 'babu',
        'phone' => time(),
        'thana' => 'দেলদুয়ার',
        'dept' => 'cse',
        'int' => '30',
        'uccupation' => 'student',
        'book option' => 'pre',
        'payment digit' => '302',
        'fb link' => 'hjgd@dsd.com',
    ],
    [
        'name' => 'corona',
        'phone' => time(),
        'thana' => 'tangail',
        'dept' => 'corona',
        'int' => '20',
        'uccupation' => 'kill',
        'book option' => 'fgfs',
        'payment digit' => 'dfdf',
        'fb link' => 'fdf',
    ],
    [
        'name' => 'babu',
        'phone' => time(),
        'thana' => 'মধুপুর',
        'dept' => 'rtrr',
        'int' => 'rt',
        'uccupation' => 'rrtr',
        'book option' => 'প্রি-পেমেন্ট করতে চান',
        'payment digit' => 'rtrt',
        'fb link' => 'rtrt',
    ],
];

foreach ($data as $element){
    $ch = curl_init('https://docs.google.com/forms/u/1/d/e/1FAIpQLSfsVl4EiXiFPrR0EesXxEqB57Wuah6rnAsmGPFkVj8VdGWnVA/formResponse');

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS,"entry.1992198361={$element['name']}&entry.1887067093={$element['phone']}&entry.664215373={$element['thana']}&entry.1469693035={$element['dept']}&entry.622712852={$element['int']}&entry.1826249838={$element['uccupation']}&entry.807378814={$element['book option']}&entry.1185553427={$element['payment digit']}&entry.1376657430={$element['fb link']}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


    $result = curl_exec($ch);
    if (curl_error($ch)){
        echo curl_error($ch);
    }else{
        echo $result;
    }
}
