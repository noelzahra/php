<?php
//filtered unserialization

class Car
{
    public function setColour($colour)
    {
        $this->colour = $colour;
    }
}

class Motorcycle
{
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
}

$car = new Car();
$car->setColour('black');

$motor = new Motorcycle();
$motor->setBrand('Ducatti');

$serialized = serialize([$car, $motor]);
var_dump($serialized);
var_dump(unserialize($serialized));
//Excluding a class with 'allowed_classes', excluded class islisted as incomplete_class_name
var_dump(unserialize($serialized, ['allowed_classes' => ['Car']] ));