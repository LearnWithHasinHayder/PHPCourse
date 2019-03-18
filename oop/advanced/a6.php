<?php

interface BaseStudent{
    function displayName();
}

class ImprovedStudent implements BaseStudent{
    private $name;
    private $title;
    function __construct($name, $title){
        $this->name = $name;
        $this->title = $title;
    }
    function displayName(){
        echo "Hello From {$this->title}. {$this->name}";
    }
}

class Student implements BaseStudent{
    private $name;
    function __construct($name){
        $this->name = $name;
    }
    function displayName(){
        echo "Hello From ".$this->name;
    }
}

// class StudentManager{
//     function introduceStudent($name){
//         $st =  new Student($name);
//         $st->displayName();
//     }
// }

class StudentManager{
    function introduceStudent(BaseStudent $student){
        $student->displayName();
    }
}

$d = new dateTime();

$st = new Student("John Doe");
$ist = new ImprovedStudent("John Doe", "Mr");
$sm = new StudentManager();
$sm->introduceStudent($ist);