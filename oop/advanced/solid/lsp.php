<?php 
abstract class Bird{
    abstract function eat();
    abstract function sleep();
}

abstract class FlyingBird extends Bird{
    abstract function fly();
}

abstract class WalkingBird extends Bird{
    abstract function walk();
}

class BirdManager{
    function maintainBird(Bird $b){
        $b->eat();
        $b->sleep();
    }

    function moveFlyingBird(FlyingBird $fb){
        $fb->fly();
    }

    function moveWalkingBird(WalkingBird $fb){
        $fb->walk();
    }
    
}

class Eagle extends FlyingBird {
    function eat(){

    }
    function sleep(){

    }
    function fly(){

    }
}

class Hawk extends FlyingBird {
    function eat(){

    }
    function sleep(){

    }
    function fly(){

    }
}

class Penguin extends WalkingBird{
    function eat(){

    }
    function sleep(){

    }
    function walk(){
        //walk the bird
    }
}