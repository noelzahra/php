<?php
/*
Traits are class-like structure that cannot be 
instantiated but can be incorporated into classes
They're like includes for classes.
*/

/*
An object inheriting forma different class might 
need to duplicate the calculateTax method
*/

class ShopProduct
{
    private $title;
    private $firstName;
    protected $price;
    private $taxRate = 17;

    public function __construct(
        $title,
        $firstName,
        $price
    )
    {
        $this->title = $title;
        $this->firstName = $firstName;
        $this->price = $price;
    }

    public function calculateTax(float $price): float
    {
        return (($this->taxRate / 100) * $price);
    }

    public function listItem()
    {
        $string = $this->title . " from " . $this->firstName;
        $string .= " sales tax at $" . $this->calculateTax($this->price);
        return $string; 
    }
}

$p = new ShopProduct("Fine Soap", "Bath Stores", 1.33);
echo $p->listItem();