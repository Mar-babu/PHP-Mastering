<?php
$to = "arcse3048@gmail.com";
$from = "Abdur Rahman <abdur.rahman603@gmail.com>";
$subject = "How is life";
$headers = "From: {$from} \r\n";
$body = "Hello \n How is your Ramadan?";

echo mail($to, $subject, $body, $headers);


//https://stackoverflow.com/questions/21836282/php-function-mail-isnt-working
//https://stackoverflow.com/questions/21836282/php-function-mail-isnt-working/21836788