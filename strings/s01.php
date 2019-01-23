<?php
$data = array(
    array( "1st A", "1st B", "1st C", "1st D", "1st E" ),
    array( "2nd A", "2nd B", "2nd C", "2nd D", "2nd E" ),
    array( "3rd A", "3rd B", "3rd C", "3rd D", "3rd E" ),
    array( "4th A", "4th B", "4th C", "4th D", "4th E" ),
    array( "5th A", "5th B", "5th C", "5th D", "5th E" ),
    );

$length = count($data[0]);
$result = array();
for($i=0;$i<$length;$i++){
    $result = array_merge($result, array_column($data,$i));
}

print_r($result);