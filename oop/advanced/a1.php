<?php
class Planet{
    public $name;

    function __construct($name){
        $this->name = $name;
    }
}

$e = new Planet("Earth");
$e2 = $e;
$e1 = new Planet("Earth");
$m = new Planet("Mars");

if($e1 == $e2){
    echo "Similar Planets";
}else{
    echo "Not Similar";
}

