<?php

class ShopProduct
{
    private $title;
    private $producerMainName;
    private $producerFirstName;
    private $price;

    public function  __construct
    (
        //scalar type declarations
        string $tempTitle,
        string $tempProducerMainName,
        string $tempProducerFirstName,
        float $tempPrice
    )
    {
        $this->title = $tempTitle;
        $this->producerMainName= $tempProducerMainName;
        $this->producerFirstName = $tempProducerFirstName;
        $this->price= $tempPrice;
    }

    public function getProducer()
    {
        return $this->producerMainName . " " . $this->producerFirstName;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getTitle()
    {
        return $this->title;
    }
}

//$shoe = new ShopProduct("Running flats", "Type 6A", "Saucony", 80);
//echo $shoe->getProducer().PHP_EOL;
//echo is_object($shoe);

//$shoe2 = new ShopProduct("Jogging", "Nike", "Free", [4.99, 4.50]);
//echo $shoe2->getPrice();
//error result as ShopProduct::__construct expects a float not an array

//$shoe3 = new ShopProduct("Running", "Escalante", "Altra", "150.00");
//echo "Converted string to float: " . $shoe3->getPrice();