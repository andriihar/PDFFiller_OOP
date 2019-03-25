<?php

namespace App\Car;

use App\Displayers\DisplayerInterface;

class TruckAbstractCar extends AbstractCar
{
    /**
     * @var int
     */
    private $loadCapacity;

    public function __construct(DisplayerInterface $displayer, string $brand, int $year, string $model, string $vin, int $loadCapacity)
    {
        parent::__construct($displayer, $brand, $year, $model, $vin);
        $this->loadCapacity = $loadCapacity;
    }

    /**
     * @return int
     */
    public function getLoadCapacity(): int
    {
        return $this->loadCapacity;
    }


    protected function carInfo()
    {
        return array_merge(parent::carInfo(), ['Load Capacity' => $this->getLoadCapacity()]);
    }
}