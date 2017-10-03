<?php
//Passing parameters into a constructor

class Car
{
    public $brand;
    public $series;
    public $engine;

    public function __construct()
    {
        $this->brand = "Ford";
        $this->series = "Focus";
        $this->engine = "petrol";
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getSeries(): string
    {
        return $this->series;
    }

    public function getEngine(): string
    {
        return $this->engine;
    }
}

$newCarObj = new Car();
echo $newCarObj->getBrand()."\n";
echo $newCarObj->getSeries()."\n";
echo $newCarObj->getEngine()."\n";
echo "\n\n";

class Person
{
    public $firstName;
    public $lastName;
    public $yearBorn;

    public function __construct($tempFirst = " ", $tempLast = " ", $tempsBorn = " ")
    {
        $this->firstName = $tempFirst;
        $this->lastName = $tempLast;
        $this->yearBorn = $tempsBorn;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function  getLastname()
    {
        return $this->lastName;
    }

    public function getYearBorn()
    {
        return $this->yearBorn;
    }

    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
}

$newObj = new Person("Scott","Zahra", 2007);
echo $newObj->getFirstName()."\n";
echo $newObj->getLastname()."\n";
echo $newObj->getYearBorn()."\n";