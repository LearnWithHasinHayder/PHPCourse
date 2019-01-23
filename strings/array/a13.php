<?php
//$numbers = array(12,13,14,15,16,17,18,19,20);
// $numbers = array();
// for($i=12;$i<21;$i++){
//     array_push($numbers, $i);
// }

foreach (range(0, 60, 11) as $number) {
    if ($number > 0) {
        echo $number . "\n";
    }
}
