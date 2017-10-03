<?php
//Creating classes
//Class is a container

class Person
{
    //properties
    public $firstName = "Scott";
    public $lastName = "Zahra";
    public $yearBorn = 2007;

}

//Object
$obj = new Person();

//Accessing property from a class
echo $obj->firstName."\n";

//Overwrite firstName
$obj->firstName = "Pierre";
$obj->yearBorn = 1999;
echo "Changed name property to ".$obj->firstName." born on ".$obj->yearBorn."\n";

class Car
{
    const YEAR = 2010;

    public $brand = "Ford";
    public $engine = "Petrol";
    public $type = "van";
    public $capacity = 1500;

}

$carObj = new Car();
echo $carObj->brand."\n";
echo $carObj->engine = "diesel"."\n";
echo $carObj::YEAR."\n"; //CONST are accessed with scope resolution operator


class Destination
{
    const AIRPORT = "Luqa";

    public $carrier = "Ryanair";
    public $maxPassengers = 150;
    public $range = 2000;
    public $pilot = "McNeal";
}

$flight21 = new Destination();
$flight21->pilot = "Santella";
$flight21->carrier = "Lufthansa";

echo "Flight is piloted by {$flight21->pilot} carrier is {$flight21->carrier}";