<?php
//Person class

class Person
{
    protected $firstName;
    protected $lastName;
    protected $yearBorn;

    public function  __construct($tempFirstName = "", $tempLastName = "", $tempYearBorn = NULL)
    {
        $this->firstName = $tempFirstName;
        $this->lastName = $tempLastName;
        $this->yearBorn = $tempYearBorn;
    }

    public function getFullName()
    {
        return $this->firstName." ".$this->lastName;
    }

    public function getYearBorn()
    {
        return $this->yearBorn;
    }
}


