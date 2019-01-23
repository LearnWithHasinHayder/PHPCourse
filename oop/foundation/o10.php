<?php
abstract class OurClass{
    function sayHi(){
        echo "Hi";
    }

    abstract function eat($v1, $v2=0);
}

class MyClass extends OurClass{

    function eat($m, $x=5){
        echo "I am eating";
    }
}

$mc = new MyClass();
$mc->eat(1,2);