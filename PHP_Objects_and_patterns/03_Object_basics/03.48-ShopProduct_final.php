<?php
// ShopProduct super class with 2 subclasses: CdProduct and BookProduct
class ShopProduct
{
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price; //protected variables are accessed from class and descendent sub-classes
    private $discount = 0; //private variables are only accessed from class

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price
    )
    {
        $this->title = $title; //$this is pseudo-variable referencing an object
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getProducerFirstName()
    {
        return $this->producerFirstName;
    }

    public function getProducerMainName()
    {
        return $this->producerMainName;
    }

    public function getPrice()
    {
        return "$" . $this->price;
    }

    public function setDiscount(int $num)
    {
        $this->discount = $num;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function getOfferPrice()
    {
        return "$" . ($this->price - ($this->price * ($this->discount / 100)));
    }

    public function getProducer()
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }

    public function getSummaryLine(): string
    {
        $str = "{$this->title} ( {$this->producerMainName}, ";
        $str .= "{$this->producerFirstName} )\n";
        return $str;
    }
}

class CdProduct extends ShopProduct
{
    private $playLength;

    public function __construct(
        string  $title,
        string  $firstName,
        string  $mainName,
        float $price,
        float $playLength
    )
    {
        //invoke superclass function __construct()
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

    public function getSummaryLine(): string
    {
        $str = parent:: getSummaryLine(); //invoke superclass function getSummaryLine()
        $str .= "Play length: {$this->playLength} mins";
        return $str;
    }
}

class BookProduct extends ShopProduct
{
    private $numPages;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $numPages
    )
    {
        //invoke superclass function __construct()
        parent:: __construct(
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->numPages = $numPages;
    }

    public function numOfPages()
    {
        return $this->numPages . "pages";
    }

    public function getSummaryLine(): string
    {
        $str = parent:: getSummaryLine(); //invoke superclass function getSummaryLine()
        $str .= "Number of pages: {$this->numPages} pages";
        return $str;
    }

}

echo"\n==============\nBase Product obj\n==============\n";

$baseProduct = new ShopProduct("Running", "Altra", "Escalante", 140);
print $baseProduct->getPrice() . "\n";
print $baseProduct->getSummaryLine() . "\n";
$baseProduct->setDiscount(15);
print $baseProduct->getDiscount() . "\n";
print "Original Price: {$baseProduct->getPrice()}, Offer Price: {$baseProduct->getOfferPrice()}\n";


echo"\n==============\nCD Product obj\n==============\n";

$CdItem = new CdProduct("Say a Little Prayer", "Aretha", "Franklin", 5.99, 3.50);
print $CdItem->getSummaryLine() . "\n";
print $CdItem->getPrice() . "\n";
$CdItem->setDiscount(40);
print "\"{$CdItem->getTitle()}\" CD Original Price: {$CdItem->getPrice()} Offer price: {$CdItem->getOfferPrice()}\n";


echo"\n==============\nBook Product obj\n==============\n";

$bookItem = new BookProduct("Atlas Shrugged", "Ayn", "Rand", 8.99, 550);
print $bookItem->getPrice() . "\n";
print $bookItem->getSummaryLine() . "\n";