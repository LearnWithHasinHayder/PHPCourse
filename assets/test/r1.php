<?php
$random=array("a"=>12,"b"=>45,"c"=>34,"d"=>22,"e"=>77,"f"=>31,12=>78,"g"=>87);

$r1=array_slice($random,0,2,true);
$r2=array_slice($random,4,null,true);

print_r($r2);
print_r($r1);