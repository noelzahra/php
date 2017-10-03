<?php
//Class constructor method

class ShopProduct
{
    public $title;
    public $producerFirstName;
    public $producerMainName;
    public $price;

    public function __construct(
        $tempTitle,
        $tempFirstName,
        $tempMainName,
        $tempPrice
    ){
        $this->title = $tempTitle;
        $this->producerFirstName = $tempFirstName;
        $this->producerMainName = $tempMainName;
        $this->price = $tempPrice;
    }

    public function getProducer()
    {
        return $this->producerFirstName." ".$this->producerMainName;
    }

    public function getPrice()
    {
        return "$".$this->price;
    }
}

$product1 = new ShopProduct("My Antonia", "Willa", "Cather", 5.99);
$product2 = new ShopProduct("Catch 22", "Joseph", "Heller", 4.99);

print "Author: {$product1->getProducer()}.\n"
    ."Title: {$product1->title} for sale at {$product1->getPrice()}.\n";

print "Author: {$product2->getProducer()}.\n"
    ."Title: {$product2->title} for sale at {$product2->getPrice()}";