<?php
class Car{
    function getName(){
        return "Car\n";
    }
}

class Truck{

    function getName(){
        return "Truck\n";
    }

}

abstract class VFactory{
    abstract function create();
}

class CarFactory extends VFactory {
    function create(){
        return new Car();
    }
}

class TruckFactory extends VFactory{
    function create(){
        return new Truck();
    }
}

class VehicleFactory{
    function getFactory($type='car'){
        if('car'==$type){
            return new CarFactory();
        }else if('truck'==$type){
            return new TruckFactory();
        }
    }
}

$vf = new VehicleFactory();
$tf = $vf->getFactory('truck');
$truck = $tf->create();
echo $truck->getName();

$cf = $vf->getFactory('car');
$car =$cf->create();
echo $car->getName();
