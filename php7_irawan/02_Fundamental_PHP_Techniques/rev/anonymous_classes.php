<?php
//anonymous classes

class Document
{
    private $printer;

    public function setPrinter($printer)
    {
        $this->printer = $printer;
    }

    public function print()
    {
        $this->printer->print();
    }
}

$document = new Document;
$document->setPrinter(new class{
    public function print()
    {
        echo "Printing from anonymous class method\n";
    }
});
$document->print();