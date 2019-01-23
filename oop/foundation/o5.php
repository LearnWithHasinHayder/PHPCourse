<?php
class Animal{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }
    public function eat(){
        echo "{$this->name} is eating\n";
    }

    public function run(){
        echo "{$this->name} is running\n";
    }

    public function sleep(){
        echo "{$this->name} is sleeping\n";
    }

    public function greet(){} 

    protected function addTitle($title){
        $this->name = $title . " " . $this->name;
    }
}

class Human extends Animal {
    public function greet(){
        $this->addTitle("Mr.");
        echo "{$this->name} says Hi\n";
    } 
}

class Cat extends Animal{
    public function greet(){
        echo "{$this->name} says Meow\n";
    } 
}

$rasel = new Human('Rasel');
echo $rasel->greet();
$rasel->eat();


$cat1 = new Cat('Tom');
$cat1->greet();
$cat1->sleep();