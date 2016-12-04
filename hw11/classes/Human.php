<?php

require_once './Creature.php';
require_once './Dog.php';

class Human extends Creature
{

    private $gender;
    private $weight;
    private $height;
    private $dog;

    public function __construct($name, $gender, $weight, $height, Dog $dog)
    {
        parent::__construct($name);
        $this->setGender($gender);
        $this->setWeight($weight);
        $this->setHeight($height);
        $this->setDog($dog);
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    public function setDog(Dog $dog)
    {
        $this->dog = $dog;
        return $this;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getDog()
    {
        return $this->dog;
    }

    public function canMeet(self $otherHuman)
    {
        return $this->getGender() !== $otherHuman->getGender();
    }

    public function meet(self $otherHuman)
    {
        if ($this->canMeet($otherHuman)) {
            $this->doAction('meeting with ' . $otherHuman->getName());
        } else {
            echo $this->getName() . ' cannot meet with ' . $otherHuman->getName();
        }
    }

    public function makeNoise()
    {
        $this->doAction('speaking');
    }

}
