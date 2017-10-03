<?php
//Superclass amd subclasses for book and cd with constructor methods

class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price
    ) {
        $this->title = $title;
        $this->producerMainName = $mainName;
        $this->producerFirstName = $firstName;
        $this->price= $price;
    }

    public function getProducer()
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName},";
        $base .= "{$this->producerFirstName})\n";
        return $base;
    }

    public function getPrice()
    {
        return "$" . $this->price;
    }
}

class CdProduct extends ShopProduct
{
    private $playLength;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float  $price,
        int $playLength
    )
    {
        parent:: __construct(
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->playLength = $playLength;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )\n";
        $base .= "Playing time: {$this->playLength} mins\n";
        return $base;
    }

}

class BookProduct extends ShopProduct
{
    private $numPages;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float  $price,
        int $numPages
    )
    {
        //invokde the __construct() method from parent
        parent:: __construct(
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->numPages = $numPages;
    }

    public function getNumOfPages()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )\n";
        $base .= "Page count - {$this->numPages} pages\n";
        return $base;
    }
}

$product = new ShopProduct("Altra", "Esclaate", "Boston", 50 );
print $product->getSummaryLine();

echo"\n==============\nBook Product obj\n==============\n";

$bookProduct = new BookProduct("Atlas Shrugged", "Ayn Ryan", "Penguin", 6.99, 540);
print $bookProduct->getSummaryLine();//invoked from BookProduct class
print $bookProduct->getProducer().PHP_EOL;//invoked from ShopProduct super class

echo"\n==============\nCD Product obj\n==============\n";

$cdProduct = new CdProduct("Say a little Prayer", "Franklin", "Anetha", 8.99, 5.5 );
print $cdProduct->getPrice().PHP_EOL;//invoked from ShopProduct super class
print $cdProduct->getSummaryLine();//invoked from Product class