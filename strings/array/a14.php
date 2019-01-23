<?php
$numbers = range(40,72);
$random = mt_rand(0,32);


$random = mt_rand(0,32);

$luck = $numbers[$random];
if($luck % 2 == 0){
    echo "Head";
}else{
    echo "Tail";
}

echo "\n";

shuffle($numbers);
print_r($numbers);
$randomNumber = $numbers[3];
echo $randomNumber;