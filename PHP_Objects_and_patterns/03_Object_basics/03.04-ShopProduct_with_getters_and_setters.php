<?php
//Class properties

class ShopProduct
{
    public $title = "default product";
    public $producerMainName = "main name";
    public $producerFirstName = "first name";
    public $price;

    public function setPrice($tempPrice)
    {
        $this->price = $tempPrice;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

$shoe = new ShopProduct();
echo $shoe->title.PHP_EOL;//accessing property by an object operator ->
echo $shoe->producerFirstName.PHP_EOL;
echo $shoe->setPrice(300);
echo $shoe->getPrice().PHP_EOL;

//since properties are public new values can be assigned to them
$shoe->title = "Saucony";

$shoe2 = new ShopProduct();
$shoe2->title = "Nike";
echo "Changed shoe title to: $shoe->title".PHP_EOL;
echo "Changed shoe2 title to: $shoe2->title".PHP_EOL;

$product1 = new ShopProduct();
$product1->title = "My Antonia";
$product1->producerMainName = "Cather";
$product1->producerFirstName = "Willa";
$product1->price= 5.99;

print "Author: {$product1->producerFirstName} "
    ."{$product1->producerMainName}\n";