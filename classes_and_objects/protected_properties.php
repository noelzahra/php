<?php
// Protected and orivate properties and methods

class Person
{
    protected $firstName;
    protected $lastName;
    protected $yearBorn;

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

    protected function getFullName()
    {
        return $this->firstName." ".$this->lastName;
    }

}


class Author extends Person //Author class inherits Person class
{
    protected $penName = "Mark Twain";

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

$newAuthor = new Author("Ingram", "Bergman");
echo $newAuthor->getFullName().PHP_EOL;

$anotherAuthor = new Author("Samuel L", "Clemens");
echo $anotherAuthor->getCompleteName();
//echo $anotherAuthor->getFirstName(); //Fatal error cannot access protected method
