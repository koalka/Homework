<?php
require_once './MobileInterface.php';
require_once './Battery.php';
require_once './Screen.php';

class Mobile implements MobileInterface
{

    private $model;
    private $manufacturer;
    private $owner;
    private $battery;
    private $screen;

    const TYPE_PHONE = 'phone';

    public function __construct($model, $manufacturer, $owner, Battery $battery, Screen $screen)
    {
        $this->setModel($model);
        $this->setManufacturer($manufacturer);
        $this->setOwner($owner);
        $this->setBattery($battery);
        $this->setScreen($screen);
    }

    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function getType()
    {
        return get_called_class();
    }

    public function getBattery()
    {
        return $this->battery;
    }

    public function getScreen()
    {
        return $this->screen;
    }

    public function getInfo()
    {
        return $this->getType() . "\nModel: " . $this->getModel() . "\n Manufacturer: " . $this->getManufacturer() . "\nBattery: " . $this->getBattery() . "\nScreen: " . $this->getScreen() . "\n" . $this->getOwner(); 
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }

    public function setBattery(Battery $battery)
    {
        $this->battery = $battery;
        return $this;
    }

    public function setScreen(Screen $screen)
    {
        $this->screen = $screen;
        return $this;
    }

}
