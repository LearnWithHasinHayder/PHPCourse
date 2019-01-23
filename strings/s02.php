<?php
$name = "Abul Hossain 01234567891 abc@defg.com";
$parts = sscanf($name, "%s %s %11s %s");
print_r($parts);

sscanf($name, "%s %s %11s %s", $fname, $lname, $mobile, $email);
echo $email;


$hexColor = "#FF2F44";
sscanf($hexColor, "#%2x%2x%2x", $red, $green, $blue );
echo $blue;