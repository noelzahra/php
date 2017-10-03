<?php
// Passing inheritance through parent:: from superclass

class ShopProduct
{
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;
    private $discount = 0;

    public function __construct
    (
        string $title,
        string $firstName,
        string $mainName,
        float $price
    )
    {
        $this->title = $title;
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

    public function setDiscount(int $num)
    {
        $this->discount = $num / 100;
    }

    public function getPrice()
    {
        return "$" . ($this->price - ($this->price * $this->discount)) ;
    }

    public function getProducer()
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }

//    Base parent method for subclass getSummaryLine() methods
    public function getSummaryLine()
    {
        $str = "{$this->title} ({$this->producerMainName},";
        $str .= "{$this->producerFirstName} )\n";
        return $str;
    }
}

class CdProduct extends ShopProduct
{
    private $playLength; //private vars can only be accessed within this subclass

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $playLength
    )
    {
        // invoke superclass __construct method
        parent:: __construct(
            $title,
            $mainName,
            $firstName,
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
//        $str = "{$this->title} ( {$this->producerMainName}, ";
//        $str .= "{$this->producerFirstName} )\n";
//        Invoke getSummaryLine() method from superclass
        $str = parent::getSummaryLine();
        $str .= "Play length: {$this->playLength}mins.\n";
        return $str;
    }

}

class BookProduct extends ShopProduct
{
    private $numPages; //private vars can only be accessed within this subclass

    public function __construct(
        string $title,
        string $mainName,
        string $firstName,
        float $price,
        int $numPages
    )
    {
        //invoke __construct from superclass
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
//        $str = "{$this->title} ( {$this->producerFirstName}, ";
//        $str .= "{$this->producerMainName} )\n";
//        Invoke getSummaryLine() method from superclass
        $str = parent::getSummaryLine();
        $str .= "Number of pages: {$this->numPages} pages.\n";
        return $str;
    }
}

class ShopProductWriter
{
    private $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    public function write()
    {
        $str = " ";
        foreach ($this->products as $shopProduct) {
            $str = "{$shopProduct->getTitle()}: ";
            $str .= "{$shopProduct->getProducer()}";
            $str .= " ({$shopProduct->getPrice()})\n";
        }
        print $str;
    }
}

$baseProduct = new ShopProduct("Running", "Altra", "Escalante", 140);
$baseProduct->setDiscount(20);
echo $baseProduct->getProducer() . ": Discount offered at {$baseProduct->getPrice()} \n";

echo"\n==============\nCD Product obj\n==============\n";
$cdItem = new CdProduct("Say A little Prayer", "Anetha", "Franklin", 5.99, 5.50);
print $cdItem->getSummaryLine();
$cdItem->setDiscount(35);
print "Discount offer: {$cdItem->getTitle()} at {$cdItem->getPrice()}\n" ;

echo"\n==============\nBook Product obj\n==============\n";
$bookItem = new BookProduct("Atlas Shrugged", "Ayn", "Rand", 8.99, 550);
print $bookItem->getSummaryLine();

echo"\n==============\nList of Product obj\n==============\n";
$list = new ShopProductWriter();
$list->addProduct($bookItem);
$list->write();