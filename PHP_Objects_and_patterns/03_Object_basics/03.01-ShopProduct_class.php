<?php
//PHP classes
class ShopProduct
{
    private $productName = "Altra";

    public function getProductName()
    {
        return $this->productName;
    }
}

$shoe = new ShopProduct();
$shoe2 = new ShopProduct();
echo $shoe->getProductName().PHP_EOL;
echo gettype($shoe).PHP_EOL;
echo var_dump($shoe).PHP_EOL;
echo var_dump($shoe2).PHP_EOL;
















