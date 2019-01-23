<?php
echo mktime(0,0,0,12,12,1980)."\n";
echo strtotime("12 December, 1980")."\n";
echo time()."\n";
echo strtotime("now")."\n";
echo strtotime("+3days")."\n";

echo (strtotime("+2 weeks 7 days 24 hours 86400 seconds")-strtotime("now"))/(86400)."\n";

echo date('H:i:s A',strtotime('13 August 2005 11:12:05 PM'));

