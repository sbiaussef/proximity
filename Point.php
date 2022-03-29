<?php

class Point
{

    private $label;
    private $ordinate;
    private $abscissa;


    public function __construct(string $label, int $ordinate, int $abscissa)
    {
        $this->label = $label;
        $this->ordinate = $ordinate;
        $this->abscissa = $abscissa;
    }

    public function setLabel($value)
    {
        $this->label = $value;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setOrdinate($value)
    {
        $this->ordinate = $value;
    }

    public function getOrdinate()
    {
        return $this->ordinate;
    }

    public function setAbscissa($value)
    {
        $this->abscissa = $value;
    }

    public function getAbscissa()
    {
        return $this->abscissa;
    }
}