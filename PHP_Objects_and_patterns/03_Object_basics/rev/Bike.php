<?php
//Bike product
require "ShopProductRev.php";

class Bike extends ShopProductRev
{
    private $size;

    public function getSize()
    {
        return $this->size;
    }
}

$newBike = new ShopProduct("Ibis Mojo HD4", 4300);
echo $newBike->getTitleWithPrice();