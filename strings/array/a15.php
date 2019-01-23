<?php
$fruits = array('a'=>'Array','b'=>'Banana','c'=>'Cherry','d'=>'Dates');
$_fruits = $fruits;
shuffle($_fruits);
$key = array_rand($fruits);
//echo $key;

echo $fruits[$key];

//print_r($_fruits);
