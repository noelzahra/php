<?php
//gettype function


class Item 
{
    private $string = "Class String";

    public function getString()
    {
        return $this->string;
    }
}

$obj = new Item;

$array = [44, 2.618, "string", true, $obj->getString() ];

foreach ($array as $value) {
    echo "Index is " . $value . " type " . gettype($value) . "\n";
}