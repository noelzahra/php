<?php
//listing 03.18

require "ShopProduct.php";


class ShopProductWriter
{
    public function write(ShopProduct $shopProduct) //argument constraint: only ShopProduct obj
    {
        $str = $shopProduct->getTitle() . ": "
            . $shopProduct->getProducer()
            . " ( $" . $shopProduct->getPrice() . " )";
        return $str;
    }
}


$product = new ShopProduct("My Antonia", "Willa", 'Cather', 5.99);
$writer = new ShopProductWriter();
print $writer->write($product); // object $product passed as an argument


class readerNum
{
    public function getValues(array $default = null): array
    {
        $value = [34, 56, 78];
        $value = array_merge($default, $value);
        return $value;
    }
}

$array1 = [76, 48, 36];

$member = new readerNum();
print_r($member->getValues($array1));