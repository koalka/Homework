<?php

abstract class Creature
{

    private $name;

    public function __construct($name)
    {
        $this->setName($name);
    }

    protected function doAction($action)
    {
        echo $this->getName() . ' is ' . $action . '.';
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function walk()
    {
        $this->doAction('walking');
    }

    public function run()
    {
        $this->doAction('running');
    }

    public function eat()
    {
        $this->doAction('eating');
    }

    public abstract function makeNoise();
}
