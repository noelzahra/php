<?php
//Class inheritance using extends keyword

class Person
{
    public $firstName;
    public $lastName;
    public $yearBorn;

    public function __construct($tempFirstName = " ", $tempLastName = " ", $tempYearBorn = " ")
    {
        //echo "Person constructor".PHP_EOL;
        $this->firstName = $tempFirstName;
        $this->lastName = $tempLastName;
        $this->yearBorn = $tempYearBorn;
    }

    public function getFirstName()
    {
        return $this->firstName.PHP_EOL;
    }

    public function getLastName()
    {
        return $this->lastName.PHP_EOL;
    }

    public function getYearBorn()
    {
        return $this->yearBorn.PHP_EOL;
    }

    public function getFullName()
    {
        echo "Person->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }

}

$obj = new Person("Scott", "Zahra", 2007);
echo $obj->getFirstName();
echo $obj->getLastname();
echo $obj->getYearBorn();
echo $obj->getFullName();
echo "\n\n";

 class Author extends Person //Author class inherits Person class
 {
    public $penName = "Mark Twain";

    public function getPenName()
    {
        echo "Author->getFullName()".PHP_EOL;
        return $this->penName.PHP_EOL;
    }
 }

 $newAuthor = new Author();
 echo $newAuthor->getPenName();

 //Inheriting constructor from person class
$anotherAuthor = new Author("Samuel Langhorme", "Clemens", 1899);
echo $anotherAuthor->getFullName()." had pen name ".$newAuthor->getPenName();