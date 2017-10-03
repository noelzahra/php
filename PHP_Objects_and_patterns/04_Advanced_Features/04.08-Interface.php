<?php
//Interface is a pure template - defines functionality, never implements it

interface Chargeable
{
    //method declaration and no method body
    public function getPrice(): float;
}

interface ShippingInDays
{
    public function getShippingInDays(): int;
}

class ShopProduct implements Chargeable
{
    private $title;
    protected $price;

    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function listItemPrice()
    {
        $string = $this->title . " at $" . $this->getPrice();
        return $string;
    }
}

//though php doesn't have multiple inheritance with interface it can implement addiitonal methods
class Kayak extends ShopProduct implements ShippingInDays
{
    private $make;
    public $days;

    public function __construct(
        string $title,
        string $make,
        float $price,
        int $days
    )
    {
        parent::__construct(
            $title,
            $price
        );
        $this->days = $days;
        $this->make = $make;
    }

    public function getShippingInDays(): int
    {
        return $this->days;
    }

    public function getItem()
    {
        $string = parent::getTitle() . " " . $this->make;
        return $string;
    }

    public function listItemPrice()
    {
        $string = $this->getItem();
        $string .= " at $" . parent::getPrice();
        $string .= " shipping in " . $this->getShippingInDays() . " days";
        return $string;
    }
}


$kayak = new ShopProduct("Explorer", 2455.5);
echo $kayak->getPrice() . "\n"; 
echo gettype($kayak->getPrice()) .  "\n";
echo $kayak->listItemPrice() . "\n";

$skuk = new Kayak("NDK", "Greenlander Pro", 2545.5, 30);
echo $skuk->getShippingInDays(). "\n";
echo $skuk->getItem() . "\n";
echo $skuk->listItemPrice();