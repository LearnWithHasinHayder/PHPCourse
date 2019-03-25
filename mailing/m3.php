<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once("phpmailer/PHPMailer.php");
require_once("phpmailer/Exception.php");

$pm = new PHPMailer();

try{
    $pm->setFrom('test@example.com');
    $pm->addAddress('augustwind16@gmail.com');
    $pm->addReplyTo('john@doe.com');
    $pm->addCC('john@doe.com');
    $pm->addBCC('john@doe.com');
    $pm->Subject = "Here is the poem for you";
    $pm->Body = "Hi, Here is the <strong>poem</strong>";
    $pm->AltBody = "Here is the poem in text";
    $pm->isHTML(true);
    $pm->addAttachment("/Applications/AMPPS/www/php.local.com/mailing/sick-poem.php");
    $pm->send();
    echo "Mail Sent";
}catch(Exception $e){
    echo "Mail not sent";
}