<?php
//Anonymous class is a class with no name

//standard class naming

class Printer
{
    public function print()
    {
        echo "Printing from Printer class\n";
    }
}

class Document
{
    public function setPrinter($printer)
    {
        $this->printer = $printer;
    }

    public function print()
    {
        $this->printer->print();
    }
}

$document = new Document();
$document->setPrinter(new Printer());
$document->print();

//Anonymous class - class with no name just use new class

$document2 = new Document();
$document2->setPrinter(new class {
    public function print()
    {
        echo "Printing from an anonymous class\n";
    }
});
$document2->print();