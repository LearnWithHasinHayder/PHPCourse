<?php
$cars = [
    "nissan" => [
        "sunny" => [
            'make' => 2004,
            'model' => 'Nissan Sunny B14',
            'displacement' => '1503cc',
            'feature'=>'Some Special Features For Filder 2004'
        ],
        "sunny-ex" => [
            'make' => 2005,
            'model' => 'Nissan Sunny Ex Saloon',
            'displacement' => '1300cc',
            'feature'=>'Some Special Features For Filder 2004'
        ],
    ],
    "toyota" => [
        "axio" => [
            'make' => 2004,
            'model' => 'Toyota Corolla Axio',
            'displacement' => '1500cc',
            'feature'=>'Some Special Features For Axio 2004'
        ],
        "filder" => [
            'make' => 2005,
            'model' => 'Toyota Corolla Fielder',
            'displacement' => '1500cc',
            'feature'=>'Some Special Features For Filder 2004'
        ],
    ],
];

class Car{
    private $make, $model, $displacement, $feature;
    function __construct($cardata){
        $this->make = $cardata['make'];
        $this->displacement = $cardata['displacement'];
        $this->feature = $cardata['feature'];
        $this->model = $cardata['model'];
    }

    function __call($method, $args = null){
        $parameter = str_replace('get','',strtolower($method));
        if(isset($this->{$parameter})){
            return $this->{$parameter}."\n";
        }
        return '';
    }
}

class CarFactory{
    private $data;
    function __construct($data){
        $this->data = $data;
    }

    function getNissanSunny(){
        $data = $this->data['nissan']['sunny'];
        return new Car($data);
    }
    function getToyotaAxio(){
        $data = $this->data['toyota']['axio'];
        return new Car($data);
    }
}

//$nissanSunny = new Car($cars['nissan']['sunny']);
//echo $nissanSunny->getDisplacement();

$carFactory = new CarFactory($cars);
$nissanSunny = $carFactory->getNissanSunny();
echo $nissanSunny->getDisplacement();
echo $nissanSunny->getModel();

$toyotaAxio = $carFactory->getToyotaAxio();
echo $toyotaAxio->getDisplacement();
echo $toyotaAxio->getFeature();

