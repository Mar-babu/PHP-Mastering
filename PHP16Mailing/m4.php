<?php
require_once("phpmailer/PHPMailer.php");
require_once("phpmailer/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);

try{
    $pm->setFrom("arcse3048@gmail.com");
    $pm->addAddress("abdur.rahman603@gmail.com");
    $pm->Subject = "Here is the invoice";
    $pm->Body = "Hi, Here is the <strong>invoice</strong> from your last purchase";
    $pm->AltBody = "Hi, Here is the invoice from your last purchase";
    $pm->isHTML(true);
//    $pm->addAttachment("C:/xampp/htdocs/Php/PHP16Mailing/ilu.docx");
    $pm->send();

    echo "Mail Sent";

}catch (Exception $exception){
    echo "Failed".$pm->ErrorInfo;
}