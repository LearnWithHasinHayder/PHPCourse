<?php
trait MyTrait{
    static $number;
    abstract function sayHi();
}

class MyClassA{
    use MyTrait;

    function sayHi(){
        echo "Hi";
    }
}
class MyClassB{
    use MyTrait;

    function sayHi(){
        echo "Hi++";
    }
}


MyClassA::$number  = 2;
MyClassB::$number  = 8;
echo MyClassA::$number;

$ma = new MyClassA();
$mb = new MyClassB();
echo $ma::$number;

echo MyClassB::$number;
echo $mb::$number;