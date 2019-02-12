<?php
class Planet{
    static function echoName(){
        echo static::getName();
    }

    static function getName(){
        return "Planet";
    }
}

class Earth extends Planet{
    static function getName(){
        return "Earth";
    }
}

//Planet::echoName();

Earth::echoName();