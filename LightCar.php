<?php


class LightCar extends Car
{
    private $package;

    public function __construct($brand, $year, $model, $vin, $package)
    {
        parent::__construct($brand, $year, $model, $vin);

        $this->package = $package;
    }

    public function getPackage()
    {
        return $this->package;
    }

    protected function carInfo()
    {
        return array_merge(parent::carInfo(), ['Package' => $this->getPackage()]);
    }

}