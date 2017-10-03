<?php
//Abstract class cannot be instantiated it can only be inherited

abstract class ShopProductWriter
{
    protected $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products[] = $shopProduct;
    }

    abstract public function write();
    // no method block, just instantiated
    // abstract method is implemented in child obj
    
}

//$writer = new ShopProductWriter(); gives error


class XmlProductWriter extends ShopProductWriter
{
    //required method write() set in parent class as abstract
    public function write()
    {
        $writer = new \XMLWriter();
        $writer->openMemory;
        $writer->startDocument('1.0', 'UYF-8');
        $writer->startElement("products");
        foreach ($this->products as $shopProduct) {
            $writer->startElement('product');
            $writer->writeAttribute("title", $shopProduct->getTitle());
            $writer->startElement("summary");
            $writer->text($shopProduct->getSummaryLine());
            $writer->endElement(); //summary
            $wrtier->endElement(); //product
        }
        $writer->endElement(); //products
        $writer->endDocument();
        print $writer->flush();
    }
}

class TextProducerWriter extends ShopProductWriter
{
     //required method write() set in parent class as abstract. 
     //different from other child class
    public function write()
    {
        $str = "PRODUCTS:\n";
        foreach($this->products as $shopProduct)
        {
            $str .= $shopProduct->getSummaryLine(). "\n";
        }

        print $str;
    }
}