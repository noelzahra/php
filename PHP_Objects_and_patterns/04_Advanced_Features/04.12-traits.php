<?php
//traits help remove duplication

/*
Creating a single trait
includes with use keyword 
in two clasees
PriceUtilities method implemented
in two classes
*/

trait PriceUtilities
{
    private $taxRate = 17;

    public function calculateTax(float $price): float
    {
        return (($this->taxRate / 100) * $price);
    }
}

class ShopProduct
{
    use PriceUtilities;

    private $title;
    protected $price;

    public function __construct(
        string $title,
        float $price
    )
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function getItemTax()
    {
        $string = $this->title . " sales tax: $";
        return $string;
    }
}

abstract class Service
{
    abstract public function list();
}

class Utility extends Service
{
    use PriceUtilities;

    private $title;

    public function __construct(
        string $title
    )
    {
        $this->title = $title;
    }

    public function list()
    {
        return $this->title;
    }
}

$bike = new ShopProduct("Ibis Mojo", 4565.4);
echo $bike->getItemTax() . $bike->calculateTax(4565.5) . "\n";

$electricity = new Utility("Enemalta");
echo $electricity->list() . "\n";
echo $electricity->calculateTax(200);