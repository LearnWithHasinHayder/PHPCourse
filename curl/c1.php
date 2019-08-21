<?php
$ch = curl_init('');
curl_setopt($ch, CURLOPT_URL,'http://php.local.com/curl/hello.php' );
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($ch,CURLOPT_POSTFIELDS,'secret=noodles');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$var = curl_exec($ch);
echo strtoupper($var);

