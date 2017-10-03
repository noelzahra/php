<?php

class ShopProduct
{
    private $id = 0;

    public function setID(int $id)
    {
        $this->id = $id;
    }

    //a factory method - take raw db data and producr objects from it
    public static function getInstance(int $id, \PDO $pdo): ShopProduct
    {
        $stmt = $pdo->prepare("select * from products whre id=?");
        $result = $stmt->execute([$id]);
        $row = $stmt->fetch();
        if (empty($row)) {
            return null;
        }

        if ($row['type'] == "book") {
            $product = new BookProduct (
                $row['title'],
                $row['firstName'],
                $row['mainName'],
                (float) $row['price'],
                (int) $row['numPages']
            );
        } elseif ($row['type'] == "cd") {
            $product = new CDProduct (
                $row['title'],
                $row['firstName'],
                $row['mainName'],
                (float) $row['price'],
                (int) $row['playLength']
            );
        } else {
            $firstName = (is_null($row['firstName'])) ? "" : $row['firstName'];
            $product = new ShopProduct(
                $row['title'],
                $row['firstName'],
                $row['mainName'],
                (float) $row['price']
            );
        }

        $product->setId((int) $row['id']);
        $product->setDiscount((int) $row['discount']);
        return $product;
    }
}

//called as a static method
$obj = ShopProduct::getInstance(1, $pdo);