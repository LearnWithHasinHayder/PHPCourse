<?php
class Student{
    private $name;
    private $age;
    private $class;
    function __construct($name, $age, $class){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    function getName(){
        return $this->name;
    }
}

$S = new Student('Rahim','16','10');

$data = serialize($S);

$data2 = unserialize($data);

echo $data2->getName();