<?php

class Battery
{

    private $removable;
    private $cellChemistry;
    private $capacity;

    public function __construct($removable, $cellChemistry, $capacity)
    {
        $this->setRemovable($removable);
        $this->setCellChemistry($cellChemistry);
        $this->setCapacity($capacity);
    }

    public function isRemovable()
    {
        return $this->removable;
    }

    public function getCellChemistry()
    {
        return $this->cellChemistry;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setRemovable($removable)
    {
        $this->removable = $removable;
        return $this;
    }

    public function setCellChemistry($cellChemistry)
    {
        $this->cellChemistry = $cellChemistry;
        return $this;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
        return $this;
    }

    public function getInfo()
    {
        return ($this->isRemovable() ? 'Removable' : 'Non-removable') . ', ' . $this->getCellChemistry() . ', ' . $this->getCapacity() . ' mAh';
    }

    public function __toString()
    {
        return $this->getInfo();
    }

}
