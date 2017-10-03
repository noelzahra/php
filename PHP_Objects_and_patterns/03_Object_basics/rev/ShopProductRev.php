<?php

//ShopProduct class

class ShopProduct
{
    private $title;
    private $firstName;
    private $mainName;
    protected $price; //protected properties can be accessed from within class and subclass
    private $discount = 0;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price
    )
    {
        $this->title = $title;
        $this->firstName = $firstName;
        $this->mainName = $mainName;
        $this->price = $price;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getProducerFirstName()
    {
        return $this->firstName;
    }

    public function getProducerMainName()
    {
        return $this->mainName;
    }

    public function setDiscount(int $num)
    {
        $this->discount = $num / 100;
    }

    public function getPrice()
    {
        return "$" . $this->price - ($this->price - $this->discount);
    }

    public function getProducer()
    {
        return $this->firstName . " " . $this->mainName;
    }
//Base parent method for summary line
    public function getSummaryLine()
    {
        $string = "Product: " . $this->title;
        $string .= " by " . $this->firstName . " " . $this->mainName . ".";
        return $string;
    }

}

class BikeProduct extends ShopProduct
{
    private $size;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        string $price,
        int $size
    )
    {   //invoke superclass construct method
        parent:: __construct (
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getSummaryLine(): string
    {
        $string = parent:: getSummaryLine();
        $string .= " Size: " . $this->size . " mm";
        return $string;
    }
}

class BookProduct extends ShopProduct
{
    private $numberOfPages;

    public function __construct(
        string $title,
        string $mainName,
        string $firstName,
        float $price,
        int $numPages
    )
    {
        parent:: __construct(
            $title,
            $mainName,
            $firstName,
            $price
        );
        $this->numberOfPages = $numPages;
    }

    public function getSummaryLine(): string
    {
        $string = parent:: getSummaryLine();
        $string .= "Number of pages: " . $this->numberOfPages;
        return $string;
    }
}

$bike = new BikeProduct("Mojo HD4", "Ibis", "Cycles", 4500, 393);
echo $bike->getSummaryLine() . "\n";

$book = new BookProduct("Atlas Shrugged", "Ayn", "Rand", 8.99, 540);
echo $book->getSummaryLine();