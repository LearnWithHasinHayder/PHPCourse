<?php
class A{
    static function sayHi(){
        echo "Hi From A\n";
    }
}

class B extends A{
    static function sayHi(){
        echo "Hi From B\n";
        parent::sayHi();
    }
}

B::sayHi();

