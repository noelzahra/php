<?php
//private properties

class Person
{
    private $firstName;
    private $lastName;
    private $yearBorn;

    public function __construct($tempFirstName = " ", $tempLastName = " ", $tempYearBorn = " ")
    {
        $this->firstName = $tempFirstName;
        $this->lastName = $tempLastName;
        $this->yearBorn = $tempYearBorn;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getYearBorn()
    {
        return $this->yearBorn;
    }

    public function getFullName()
    {
        return $this->firstName." ".$this->lastName;
    }

}


class Author extends Person //Author class inherits Person class
{
    private $penName = "Mark Twain";

    public function getPenName()
    {
        return $this->penName;
    }

    public function getFullName()
    {
        return $this->firstName. " ".$this->lastName;
    }

    public function getCompleteName()
    {
        return $this->firstName. " ".$this->lastName." a.k.a ".$this->penName.PHP_EOL;
    }
}

$newAuthor = new Author("T.S.", "Elliot");
//echo $newAuthor->penName;// property is private cannot be accessed, can only be used inside a class method
echo $newAuthor->getPenName().PHP_EOL;
//echo $newAuthor->getCompleteName();//private properties firstName and lastName not accessed, only penName is available

$newObj = new Person("Sean", "Connery");
echo $newObj->getFullName();