<?php

class Instrument
{
    private $name;
    private $weight;

    public function __construct(string $name)
    {
        $this->name =  $name;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight(int $weight)
    {
        if($weight > 2)
        {
            throw new Exception("Weight not valid", 1);
        }
        $this->weight = $weight;
    }
}

class Guitar extends Instrument
{

}
$guitar = new Guitar('Ibanez');
$guitar->setWeight(1);
$guitar->getWeight();
var_dump($guitar);