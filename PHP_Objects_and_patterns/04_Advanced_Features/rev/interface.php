<?php
//interface
interface ShippingIndays
{
    public function getDays(): int;
}

interface Chargeable
{
    public function getPrice(): float;
}

class ShopProduct implements Chargeable
{
    private $title;
    protected $price;

    public function __construct(
        $title,
        $price
    )
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getListItem()
    {
        return $this->title . " at $" . $this->getPrice();
    }
}

class Kayak extends ShopProduct implements ShippingIndays
{
    private $make;
    private $days;

    public function __construct(
        string $make,
        string $title,
        float $price,
        int $days
    )
    {   
        parent::__construct(
            $title,
            $price
        );
        $this->make = $make;
        $this->days = $days;
    }

    public function getDays(): int
    {
        return $this->days;
    }

    public function listItemPrice()
    {
        $string = parent::getListItem();
        $string .= " Shipping in: " . $this->getDays() . "days.\n";
        return $string;
    }
}


$item = new Kayak("NDK", "Greenlander Pro", 2455.5, 30);
echo $item->getDays() . "\n";
echo $item->listItemPrice();