<?php

require "Car.php";

class CarList
{
    public function writeList ( Car $car ): string
    {
        $str = $car->getProduct()
            . "\nSpecial offer is at: "
            . $car->getPrice();

        return $str;
    }

}

$car1 = new Car( "Auris", "Toyota", 26000.00 );
$list = new CarList();
$output = $list->writeList($car1).PHP_EOL;
echo $output . "Type is: " . ((is_string($output)) ? true : false);