<?php


class TruckCar extends Car
{
    private $loadCapacity;

    public function __construct($brand, $year, $model, $vin, $loadCapacity)
    {
        parent::__construct($brand, $year, $model, $vin);
        $this->loadCapacity = $loadCapacity;
    }

    public function getLoadCapacity()
    {
        return $this->loadCapacity;
    }

    protected function carInfo()
    {
        return array_merge(parent::carInfo(), ['Load Capacity' => $this->getLoadCapacity()]);
    }
}