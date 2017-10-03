<?php

interface Chargeable
{
    public function getPrice(): float;
}

class ShopProduct implements Chargeable
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct(
        string $title,
        string $mainName,
        string $firstName,
        float $price
    )
    {
        $this->title = $title;
        $this->producerMainName = $mainName;
        $this->producerFirstName = $firstName;
        $this->price = $price;
    }

    public function getProducer()
    {
        return $this->producerFirstNmae . " "
            . $this->producerMainName;
    }

    public function getSummaryLine()
    {   
        $string = "Product: " . $this->title;
        $string .= " by " . $this->producerMainName . " " 
                . $this->producerFirstName;
        return $string;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

}

class CDProduct extends ShopProduct
{
    private $playLength;

    public function __construct
    (
        string $title,
        string $firstName,
        string $mainName,
        float $price,
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
        return $this->playLength . " mins";
    }

    public function getSummaryLine()
    {
        $string = "CD product: " . $this->title;
        $string .= " by " . $this->producerMainName . " ";
        $string .= $this->producerFirstName; 
        return $string;
    }
}


class BookProduct extends ShopProduct
{
    private $numberOfPages;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $numberOfPages
    )
    {
        parent:: __construct(
            $title,
            $firstName,
            $mainName,
            $price
        );
        $this->numberOfPages = $numberOfPages;
    }

    public function getNumberOfPages()
    {
        return $this->numberOfPages . " pages";
    }

    public function getSummaryLine()
    {
        $string = "Book product: " . $this->title;
        $string .= " by " . $this->producerMainName . " ";
        $string .= $this->producerFirstName;
        return $string;
    }
}

$cd = new ShopProduct("Say a little Prayer", "Aretha", "Franklin", 8.99);
echo $cd->getPrice() . "\n";
echo $cd->getSummaryLine(). "\n";

$cdNew = new CDProduct("Brothers in Arms", "Dire", "Straits", 6.99, 120);
echo $cdNew->getPlayLength() . "\n";
echo $cdNew->getSummaryLine() . "\n";

$book = new BookProduct("Atlas Shrugged", "Ayn", "Rand", 5.99, 530);
echo $book->getNumberOfPages();
echo $book->getSummaryLine();