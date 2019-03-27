<?php

namespace App\Car;

use App\Displayers\DisplayerInterface;

abstract class AbstractCar
{
    /**
     * @var DisplayerInterface
     */
    private $displayer;
    /**
     * @var string
     */
    private $brand;
    /**
     * @var int
     */
    private $year;
    /**
     * @var string
     */
    private $model;
    /**
     * @var string
     */
    private $vin;

    public function __construct(DisplayerInterface $displayer, string $brand, int $year, string $model, string $vin)
    {
        $this->displayer = $displayer;
        $this->brand = $brand;
        $this->year = $year;
        $this->model = $model;
        $this->vin = $vin;
    }

    protected function carInfo(): array
    {
        return [
            'Model' => $this->getModel(),
            'Brand' => $this->getBrand(),
            'Year' => $this->getYear(),
            'Vin' => $this->getVin(),
        ];
    }

    public function displayInfo()
    {
        return $this->displayer->display($this->carInfo());
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @return string
     */
    public function getVin(): string
    {
        return $this->vin;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }
}