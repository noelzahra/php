<?php
// Inheritance from ShopProduct class

class ShopProduct
{
    public $numPages;
    public $playLength;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $numPages = 0,
        int $playLength = 0
    ) {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->numPages = $numPages;
        $this->playLength = $playLength;
    }

    public function getProducer()
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

class CdProduct extends ShopProduct
{
    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getSummaryLine()//alters the getSummaryLine() method in parent
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )\n";
        $base .= "Play length: {$this->playLength} mins\n";
        return $base;
    }
}


class BookProduct extends ShopProduct
{
    public function getNumberOfPages()//alters the getSummaryLine() method in parent
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName},";
        $base .= "{$this->producerFirstName} )\n";
        $base .= "Number of pages: {$this->numPages} pages\n";
        return $base;
    }
}

echo"\n==============\nCD Product obj\n==============\n";
$musicProduct = new CdProduct("Brothers in Arms", "Dire Straits", "Rock band", 9.88, 0, 136 );
print $musicProduct->getSummaryLine();
print "$" . $musicProduct->getPrice() . "\n";
print "Artist: " . $musicProduct->getProducer() . "\n"; //Inherited from ShopProduct

echo"\n================\nBook Product obj\n================\n";
$bookProduct = new BookProduct("Catch 22", "Joseph Heller", "Penguin boks", 5.99, 340, 0);
print $bookProduct->getSummaryLine();
