<?php

class Vehicle
{

    private $type;
    private $make;
    private $model;
    private $fuelType;
    private $transmision;
    private $year;
    private $condition;

    public function __construct($type, $make, $model, $fuelType, $transmision, $year, $condition)
    {
        $this->setType($type);
        $this->setMake($make);
        $this->setModel($model);
        $this->setFuelType($fuelType);
        $this->setTransmision($transmision);
        $this->setYear($year);
        $this->setCondition($condition);
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function setMake($make)
    {
        $this->make = $make;
        return $this;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;
        return $this;
    }

    public function setTransmision($transmision)
    {
        $this->transmision = $transmision;
        return $this;
    }

    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getMake()
    {
        return $this->make;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getFuelType()
    {
        return $this->fuelType;
    }

    public function getTransmision()
    {
        return $this->transmision;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getCondition()
    {
        return $this->condition;
    }

}
