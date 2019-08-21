<?php
set_time_limit(0);
$ch = curl_init("https://images.unsplash.com/photo-1566267147467-754408cbad53");
$filename = fopen("image2.jpg","w");
curl_setopt($ch, CURLOPT_FILE, $filename);
curl_exec($ch);