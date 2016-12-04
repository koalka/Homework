<?php

require_once './Creature.php';

class Dog extends Creature
{

    private $breed;
    private $furcolor;
    private $furlenght;
    private $eyecolor;

    public function __construct($name, $breed, $furcolor, $furlenght, $eyecolor)
    {
        parent::__construct($name);
        $this->setBreed($breed);
        $this->setFurcolor($furcolor);
        $this->setFurlenght($furlenght);
        $this->setEyecolor($eyecolor);
    }

    public function setBreed($breed)
    {
        $this->breed = $breed;
        return $this;
    }

    public function setFurcolor($furcolor)
    {
        $this->furcolor = $furcolor;
        return $this;
    }

    public function setFurlenght($furlenght)
    {
        $this->furlenght = $furlenght;
        return $this;
    }

    public function setEyecolor($eyecolor)
    {
        $this->eyecolor = $eyecolor;
        return $this;
    }

    public function getBreed()
    {
        return $this->breed;
    }

    public function getFurcolor()
    {
        return $this->furcolor;
    }

    public function getFurlenght()
    {
        return $this->furlenght;
    }

    public function getEyecolor()
    {
        return $this->eyecolor;
    }

    public function makeNoise()
    {
        $this->doAction('barking: "Woof-woof!"');
    }

    public function bite()
    {
        $this->doAction('biting');
    }

    public function drink($liquid = 'water')
    {
        $this->doAction('drinking ' . $liquid);
    }

}
