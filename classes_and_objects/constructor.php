<?php
//Constructor method

class Person
{
    public $firstName;
    public $lastName;
    public $dateOFBirth;

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }

    public function __construct()
    {
        //echo "This is a constructor\n";
        $this->firstName = "Scott";
        $this->lastName = "Zahra";
        $this->dateOFBirth = 2007;
    }
}

$newObj = new Person();
echo $newObj->getFirstName()."\n";
echo $newObj->lastName."\n";
echo $newObj->dateOFBirth."\n";