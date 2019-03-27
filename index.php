<?php

require __DIR__ . '/vendor/autoload.php';

use App\Car\LightAbstractCar;
use App\Car\TruckAbstractCar;
use App\Displayers\JsonDisplayer;
use App\SingletonObject;

$displayer = new JsonDisplayer();

$lightCar = new LightAbstractCar($displayer, 'Tesla', 2018, 'X', 'ASFAS888324FSD224534', 'Full package');
$truck = new TruckAbstractCar($displayer, 'Volvo', 2013, 'FS24', 'AS324FSDFS7682224534', 15);

echo $lightCar->displayInfo(), PHP_EOL;
echo $truck->displayInfo(), PHP_EOL;

print_r($obj = SingletonObject::getInstance());
print_r($obj2 = SingletonObject::getInstance());
var_dump($obj === $obj2);