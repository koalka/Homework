<?php

class Screen
{

    private $type;
    private $size;
    private $resolution;
    private $touch;

    public function __construct($type, $size, $resolution, $touch)
    {
        $this->setType($type);
        $this->setSize($size);
        $this->setResolution($resolution);
        $this->setTouch($touch);
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }

    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
        return $this;
    }

    public function setTouch($touch)
    {
        $this->touch = $touch;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getResolution()
    {
        return $this->resolution;
    }

    public function isTouch()
    {
        return $this->touch;
    }

    public function getInfo()
    {
        return $this->getSize() . ' inches ' . $this->getType() . ($this->isTouch() ? ' Touchscreen' : '') . ' display, ' . $this->getResolution() . ' pixels';
    }

    public function __toString()
    {
        return $this->getInfo();
    }

}
