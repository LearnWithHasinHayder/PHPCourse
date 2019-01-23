<?php
abstract class Shape{
    abstract function getArea();
    abstract function getPerimeter();
}

class Rectangle extends Shape{

    private $base, $height;

    function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base){
        $this->base = $base;
    }

    public function setHeight($height){
        $this->height = $height;
    }
    function getArea(){
        return $this->base*$this->height;
    }

    function getPerimeter(){
        
    }
}

class Triangle extends Shape{
    function getArea(){
        return $this->base*$this->height;
    }

    function getPerimeter(){
        
    }
}

$triangle = new Rectangle(10,10);
echo $triangle->getArea();

$shape = new Shape();
