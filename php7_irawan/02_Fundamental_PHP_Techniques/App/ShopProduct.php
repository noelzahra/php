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