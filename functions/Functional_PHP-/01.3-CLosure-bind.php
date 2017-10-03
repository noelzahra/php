<?php
//Closure bing

abstract class Shape
{
    public $width;
    public $height;
}

class Square extends Shape
{
    public function __construct(int $a)
    {
        $this->width = $this->height = $a;
    }
}

class Rectangle extends Shape
{
    public function __construct(int $a, int $b)
    {
        $this->width = $a;
        $this->height = $b;
    }
}

$printArea = function()
{
    printf("Area of shape: %d\n", ($this->width * $this->height));
};

//bind
$printSquareArea = $printArea->bindTo(new Square(10));
$printSquareArea();

//bind and call
$printArea->call(new Square(10));
$printArea->call(new Rectangle(10, 5));