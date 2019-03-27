<?php

namespace App\Car;

use App\Displayers\DisplayerInterface;

class LightAbstractCar extends AbstractCar
{
    /**
     * @var string
     */
    private $package;

    public function __construct(DisplayerInterface $displayer, string $brand, int $year, string $model, string $vin, string $package)
    {
        parent::__construct($displayer, $brand, $year, $model, $vin);
        $this->package = $package;
    }

    /**
     * @return string
     */
    public function getPackage(): string
    {
        return $this->package;
    }


    protected function carInfo(): array
    {
        return array_merge(parent::carInfo(), ['Package' => $this->getPackage()]);
    }

}