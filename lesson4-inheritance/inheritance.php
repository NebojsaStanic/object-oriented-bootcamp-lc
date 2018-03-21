<?php

abstract class Shape {

    protected $color;

    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    abstract protected function calculateArea();

    public function getColor()
    {
        return $this->color;
    }

}

class Rectangle extends Shape {

    protected $length = 4;

    public function calculateArea()
    {
        return pow($this->length, 2);
    }
}

class Triangle extends Shape {

    protected $base = 4;
    protected $height = 5;

    public function calculateArea()
    {
        return .5 * $this->base * $this->height;
    }
}

var_dump((new Triangle('blue'))->getColor());
