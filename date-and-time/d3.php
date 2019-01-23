<?php
echo time()."\n";
echo mktime(0,0,0,12,1,2018)."\n";
date_default_timezone_set('Asia/Dhaka');
echo mktime(0,0,0,12,1,2018)."\n";
echo gmmktime(0,0,0,12,1,2018)."\n";
echo (22400-800)/(60*60)."\n";


$j1 = mktime(0,0,0,12,12,1980);
$j2 = mktime(0,0,0,11,30,2018);

echo date_diff($j1,$j2);