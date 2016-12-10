<?php

class Factorial
{

    private $n;

    public function __construct($n)
    {
        $this->setN($n);
    }

    public function setN($n)
    {
        $this->n = $n;
        return $n;
    }

    public function getN()
    {
        return $this->n;
    }

    public function getFactorial()
    {
        $factorial = 1;
        for ($i = 1; $i <= $this->getN(); $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }

}
