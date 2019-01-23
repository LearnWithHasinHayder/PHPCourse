<?php
class Human{
    public $name;
    function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }

    function sayName(){
        echo "My Name is {$this->name}\n";
    }
}

class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}

class Dog{
    function sayHi(){
        echo "Woof\n";
    }
}

$h1 = new Human();
$h2 = new Human();
$h1->name = "Rubel"; //set
$h2->name = "Hasin";
$c1 = new Cat();
$d1 = new Dog();

$h1->sayName();
//$h1->sayName();
//echo $h1->name; //get

$h2->sayHi();
//$h2->sayName();
//echo $h2->name; //get
//$c1->sayHi();