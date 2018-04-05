<?php

class Robot {
    private $eye;
    private $nose;
    private $arm;

    public function __construct(int $eye, int $nose, int $arm)
    {
        $this->eye = $eye;
        $this->nose = $nose;
        $this->arm  = $arm;
    }

    public function createRobot()
    {
        $eyes = $this->eye > 1? 'eyes' : 'eye';
        $nose = $this->nose > 0? 'nose' : 'noses';
        $arms = $this->arm > 1? 'arms' : 'arm';
        return "Robot has $this->eye $eyes, $this->nose $nose and $this->arm $arms\n";
    }
}

$cpo = new Robot(2, 1, 4);
$cyclops = new Robot(1, 0, 1);
echo $cpo->createRobot();
echo $cyclops->createRobot();

//recursion
function recursion(int $int)
{
   if($int === 0){
        return 1;
   }

    $result = recursion($int -1 ) * $int;
    return $result;
}

echo recursion(5);

//Bool flags
class Car {

    private $color;
    private $isBought = false;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getIsBought()
    {
        return $this->isBought;
    }

    public function buy()
    {
        $this->isBought = true;
    }
}

$tesla = new Car('red');
var_dump($tesla->getColor());
$tesla->buy();
var_dump($tesla->getIsBought());

