<?php

spl_autoload_register(function ($class) {
    $className = $class . '.php';
    if (!file_exists($className)) {
        die('Wrong Class name' . PHP_EOL);
    }

    require_once $className;

});

$lightCar = new LightCar('Tesla', 2018, 'X', 'ASFAS888324FSD224534', 'Full package');
$truck = new TruckCar('Volvo', 2013, 'FS24', 'AS324FSDFS7682224534', '15 ton');

echo  $lightCar->getFullInfo(), PHP_EOL;
echo  $truck->getFullInfo(), PHP_EOL;

