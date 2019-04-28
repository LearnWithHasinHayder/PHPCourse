<?php
echo ini_get("error_log");
$headers = "From: system@server.com \r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//error_log("This is an error message 2",1,"admin@server.com",$headers);

$date = date("Y:m:d H:j:s");
error_log("{$date} Log in a new file 6 \n",3,"/tmp/error.txt");
