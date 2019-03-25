<?php
$to = "email_address";
$from = "John Doe <test@example.com>";
$subject = "Here's the poem you are looking for - another test";
$mainMessage = "Hi, here's the poem";
$fileName = "./sick-poem.pdf";
$fileNewName = "poem.pdf";

$fileData = file_get_contents($fileName);
$boundary = "HereIsABoundary";

$headers = "From: {$from}\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: multipart/mixed;\r\n";
$headers .= " boundary=\"{$boundary}\";\r\n";

$message = "This is a multipart message\r\n";
$message .="--{$boundary}\r\n";
$message .="Content-type: text/plain; charset='UTF-8'\r\n";
$message .="Content-Transfer-Encoding: 7bit\r\n";
$message .= $mainMessage ."\r\n";

$encodedFileData = chunk_split(base64_encode($fileData));

$message .= "--{$boundary}\r\n";
$message .= "Content-Type: application/pdf;\r\n";
$message .= " name=\"{$fileNewName}\"\r\n";
$message .= "Content-Disposition: attachment;\r\n";
$message .= " filename=\"{$fileNewName}\"\r\n";
$message .= "Content-Transfer-Encoding: base64\r\n";
$message .= $encodedFileData."\r\n";
$message .= "--{$boundary}--\r\n";

$mailSent = mail($to, $subject, $message, $headers );

if($mailSent){
    echo "Mail Has Been Sent";
}else{
    echo "Sending Mail Failed";
}