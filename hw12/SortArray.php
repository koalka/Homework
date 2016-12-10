<?php

class SortArray
{

    private $input;

    public function __construct(array $input)
    {
        $this->setArray($input);
        $this->sortArray();
    }

    public function setArray($input)
    {
        $this->input = $input;
        return $this;
    }

    private function sortArray()
    {
        sort($this->input);
    }

    public function getArray()
    {
        return $this->input;
    }

}
