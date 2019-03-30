<?php
require_once("phpmailer/PHPmailer.php");
require_once("phpmailer/Exception.php");
require_once("phpmailer/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);

try{

    $pm->SMTPDebug = 2;
    $pm->isSMTP(true);
    $pm->Host = "mail.server.com";
    $pm->SMTPAuth = true;
    $pm->Username = "youremail@domain.com";
    $pm->Password = "*********";
    $pm->SMTPSecure = "tls";
    $pm->Port = 587;

    $pm->setFrom("test@hasin.me");
    $pm->addAddress("receiver@domain.com");
    $pm->Subject = "Here is the invoice";
    $pm->Body = "Hi, Here is the <strong>invoice</strong> from your last purchase";
    $pm->AltBody = "Here is the invoice from your last purchase";
    $pm->isHTML(true);
    $pm->addAttachment("/Applications/AMPPS/www/php.local.com/mailing/sick-poem.pdf");
    $pm->send();

    echo "Mail Sent";
}catch (Exception $e){
    echo "Failed ".$pm->ErrorInfo;
}