<?php

require "ShopProduct.php";

class ShoeProduct extends ShopProduct
{
    private $shoeTitle = 'Altra';
    private $offerPrice = 99;

    public function getNewName()
    {
        return "New offer on: " . $this->shoeTitle . " at $" . $this->offerPrice ;
    }

}

$shoe = new ShoeProduct("Running flats", "Type A6", "Saucony", 99);
echo $shoe->getNewName();