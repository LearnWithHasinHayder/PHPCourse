<?php
class Color{
    function __construct($color){
        $this->color = $color;
    }

    function getColor(){
        return $this->color;
    }
    function setColor($color){
        $this->color = $color;
    }

}
class Test{
    public $data;
    public $color;
    function __construct($data){
        $this->data = $data;
        $this->color = new Color('red');
    }

    function updateColor($color){
        return $this->color->setColor($color);
    }
}
$t = new Test(12);
$x = clone $t;
$x->data = 13;
$x->updateColor('green');

print_r($x);
print_r($t);