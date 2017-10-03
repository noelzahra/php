<?php
//traits

trait PriceUtilities
{
    private $taxRate = 17;

    public function calculateTaxRate(float $price): float
    {
        return (($this->taxRate / 100) * $price);
    }
}

trait IdentityTrait
{
    public function generateID(): string
    {
        return "Prodcut id";
    }

}

class ShopProduct
{
    use PriceUtilities, IdentityTrait;

    private $title;
    protected $price;
}

$bike = new ShopProduct;
echo $bike->generateID() . "\n";
echo $bike->calculateTaxRate(4555.5) . "\n";