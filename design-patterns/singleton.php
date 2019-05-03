<?php 
//singleton

class SomeClass{
    static $instance;
    private $name;

    function __construct($name){
        $this->name = $name;
        echo "New Instance Created\n";
    }

    static function getInstance($name=null){
        if(!self::$instance){
            if($name){
                self::$instance = new SomeClass($name);
            }else{
                self::$instance = new SomeClass('');
            }
        }else{
            echo "Old Instance Supplied\n";
        }

        return self::$instance;
    }

    function sayName(){
        echo $this->name."\n";
    }

}

$sc1 = SomeClass::getInstance("Rahim");
$sc2 = SomeClass::getInstance('Karim');
$sc3 = SomeClass::getInstance();

$sc1->sayName();
$sc2->sayName();
$sc3->sayName();
