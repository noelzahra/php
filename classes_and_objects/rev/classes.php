<?php

class Person
{
    protected $firstName;
    protected $lastName;
    protected $yearBorn;

    public function __construct($tempFirstName = "", $tempLastName = "", $tempYearBorn = NULL)
    {
        $this->firstName = $tempFirstName;
        $this->lastName = $tempLastName;
        $this->yearBorn = $tempYearBorn;
    }

    public function getFullName() {
        return $this->firstName." ".$this->lastName;
    }

    public function getYearBorn() {
        return $this->yearBorn;
    }
}

$member = new Person("Pierre", 'Zara', 1999);
echo $member->getFullName()." was born on ". $member->getYearBorn().PHP_EOL;


class Author extends Person
{
    protected $pname = "Mark Twain";

    public function  getCompleteName()
    {
        return $this->getFullName()." a.k.a ".$this->pname;
    }
}

$chaplin = new Author("Charles", "Chaplin", 1920);
echo $chaplin ->getCompleteName();