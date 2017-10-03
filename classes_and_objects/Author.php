<?php
//Author class

include 'Person.php';

class Author extends Person //Author class inherits Person class
{
    private $penName;

    public function __construct ( $tempFirstName = "", $tempLastName = "", $tempPenName = "" )
    {
        $this->firstName = $tempFirstName;
        $this->lastName = $tempLastName;
        $this->penName = $tempPenName;
    }

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