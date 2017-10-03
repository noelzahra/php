<?php
//abstarct classes

abstract class ShopProductWriter
{
    abstract public function writer();
}

class XmlProductWriter extends ShopProductWriter
{
    public function writer()
    {
        print "Writing from XMLWriter\n";
    }
}

class TextWriter extends ShopProductWriter
{
    public function writer()
    {
        print "Writing from TextWriter\n";
    }
}

$product1 = new XMLProductWriter;
$product1->writer();
$product2 = new TextWriter;
$product2->writer();