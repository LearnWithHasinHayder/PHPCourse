<?php
class StringUtility{
    private $string;
    private $search;
    function __construct($string){
        $this->string = $string;
    }

    function search($string){
        $this->search = $string;
        return $this;
    }

    function replace($string){
        if(!isset($this->search)){
            throw new Exception("Nothing To Replace");
        }

        $this->string  = str_replace($this->search, $string, $this->string);
        $this->search = "";
        return $this;
    }

    function upperCase(){
        $this->string = strtoupper($this->string);
        return $this;
    }
    function lowerCase(){
        $this->string = strtolower($this->string);
        return $this;
    }

    function print(){
        echo $this->string;
    }
}

$s = new StringUtility("Hello World");

$s->search("World")
->replace("Earth")
->search("Hello")
->replace("Hi")
->upperCase()
->lowerCase()
->print(); 
//Method Chaining