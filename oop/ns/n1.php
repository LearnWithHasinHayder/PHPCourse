<?php
namespace Project;
include "c1.php";
include "c2.php";

use \Project\Motorcycles\Bike as Hornet;
use \Project\Bike as Pulsar;

$b = new Bike();
echo $b->getName();

$h = new Hornet();
echo $h->getName();

$p = new Pulsar();
echo $p->getName();
