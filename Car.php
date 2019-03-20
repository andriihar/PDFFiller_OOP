<?php


abstract class Car
{

    protected $brand;
    protected $year;
    protected $model;
    protected $vin;

    public function __construct($brand, $year, $model, $vin)
    {
        $this->brand = $brand;
        $this->year = $year;
        $this->model = $model;
        $this->vin = $vin;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getVin()
    {
        return $this->vin;
    }

    protected function carInfo()
    {
        return [
            'Model' => $this->getModel(),
            'Brand' => $this->getBrand(),
            'Year' => $this->getYear(),
            'Vin' => $this->getVin(),
        ];
    }

    public function getFullInfo()
    {
        return json_encode($this->carInfo());
    }
}