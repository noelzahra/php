<?php
// Combining CD and book-related data in a single class
// Approach should be avoided

class ShopProduct
{
    private $numPages;
    private $playLength;
    private $title;
    private  $producerMainName;
    private $producerFirstName;
    private $price;

    public function __construct
    (
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $playLength = 0,
        int $numPages = 0
    )
    {
        $this->numPages = $numPages;
        $this->playLength = $playLength;
        $this->title = $title;
        $this->producerMainName = $mainName;
        $this->producerFirstName = $firstName;
        $this->price = $price;
    }

    public function getNumberPages()
    {
        return $this->numPages;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getProducer()
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerFirstName}, ";
        $base .= "{$this->producerMainName} )";

//        if ($this->type == "book") {
//            $base .= " : page count = {$this->numPages}";
//        } else ($this->type == "cd") {
//            $base .= " : play length = {$this->playLength}";
//        }

        return $base;
    }

}

echo "\n========================\nClass with CD and book\ndata in a single class\n========================\n";
$cdProduct = new ShopProduct("Brothers in Arms", "Dire", "Straits", 10.99, 90, 25);
echo $cdProduct->getSummaryLine();


class CdProduct
{
    private $playLength;
    private $title;
    private $producerMainName;
    private $producerFirstName;
    private $price;

    public function __construct(
        string $title,
        string $producerMainName,
        string $producerFirstName,
        float $price,
        int $playLength
    ){
        $this->title = $title;
        $this->producerFirstName = $producerFirstName;
        $this->producerMainName = $producerMainName;
        $this->price = $price;
        $this->playLength = $playLength;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getProducer()
    {
        return $this->producerMainName . " "
            . $this->producerFirstName;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName} ,";
        $base .= "{$this->producerFirstName} )";
        $base .= ": playing time: {$this->playLength}";
        return $base;
    }

}
echo "\n\n========================\nClass with CD `data\nin a single class\n========================\n";

$cdItem = new CdProduct("Brothers In Arms", "Dire", "Straits", 8.99, 130);
print $cdItem->getSummaryLine();

// Duplication of methods between two classes not desirable

class BookProduct
{
    private $numPages;
    private $title;
    private $producerMainName;
    private $producerFirstName;
    private $price;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $numPages
    )
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this-> price = $price;
        $this->numPages = $numPages;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

    public function getProdcuer()
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }

    public function getSummaryLine()
    {
        $base = "{$this->title} ( {$this->producerMainName},";
        $base .= "{$this->producerFirstName} )";
        $base .= "page count = {$this->getNumPages()}";
        return $base;
    }
}

echo "\n\n========================\nClass with Book data\nin a single class\n========================\n";

$bookItem = new BookProduct("Catch 22", "Joseph", "Heller", 5.88, 400);
print $bookItem->getSummaryLine();