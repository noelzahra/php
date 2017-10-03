<?php
// Car class


class Car
{
    private $title;
    private $brand;
    private $price;

    public function __construct
    (
        string $title,
        string $brand,
        float $price
    )
    {
        $this->title = $title;
        $this->brand = $brand;
        $this->price = $price;
    }

    public function getProduct()
    {
        return "Car: " . $this->title . " is a " . $this->brand;
    }

    public function getPrice()
    {
        return "€" . $this->price;
    }
}

//$car1 = new Car("Focus", "Ford", 23000.00 );
//print $car1->getProduct();
