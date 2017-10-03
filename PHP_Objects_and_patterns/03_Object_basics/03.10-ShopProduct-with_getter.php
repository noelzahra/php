<?php
//Class methods

class ShopProduct
{
    public $title = "My Antonia";
    public $producerMainName = "Cather";
    public $producerFirstName = "Willa";
    public $price = 5.99;

    public function getProducer()
    {
        return $this->producerFirstName." "
            .$this->producerMainName;
    }
}

$product1 = new ShopProduct();
print "Author: {$product1->getProducer()}.\n";
print "Price for {$product1->title} is "
    ."\${$product1->price}.\n";