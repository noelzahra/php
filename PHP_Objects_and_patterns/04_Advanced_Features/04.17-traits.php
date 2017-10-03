<?php
//accessing more thanone trait

trait PriceUtilities
{
    private $taxRate = 17;

    public function calculateTax(float $price): float
    {
        return (($this->taxRate / 100) * $price);
    }
}

trait IdentityTrait
{
    public function generateID(): string
    {
        return "Prodcut ID";
    }
}

class ShopProduct
{
    use PriceUtilities, IdentityTrait;

    private $title;
    protected $price;

    public function __construct(
        $title,
        float $price
    )
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function getTitle()
    {
        return $this->title;
    }

}

$product = new ShopProduct("Ibis Mojo", 4554.5);
echo $product->getTitle() . "\n";
echo $product->calculateTax(4554.5) . "\n";
echo $product->generateID();
