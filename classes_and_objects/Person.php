<?php
//Person class

class Person
{
    public $firstName;
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

    public function getFullName()
    {
        return $this->firstName." ".$this->lastName;
    }

}
