<?php
$d1 = new DateTime('20 May 2007');
$d2 = new DateTime('27 July 2013');
$difference = $d1->diff($d2); //date_diff($d1,$d2);
echo $difference->format('%y Year %m Month %d Days');

