<?php
//Class methods - functions living inside a class

class Person
{
    //properties
    public $firstName = "Scott";
    public $lastName = "Zahra";
    public $yearBorn = 2007;

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function  setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
}

$newObj = new Person();
$newObj->setFirstName('Sydney'); // change firstName
echo $newObj->getFirstName();