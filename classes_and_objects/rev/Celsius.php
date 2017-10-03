<?php
// Convert Fahrenheit to Celsius class


class Celsius
{
    private $fahrenheit = 0;

    public function  __construct($tempFahrenheit)
    {
        $this->fahrenheit = $tempFahrenheit;
    }

    public function convertTemp()
    {
        $celsius = (($this->fahrenheit - 32) / 1.8);
        return number_format( $celsius, 2, ".", " " );
    }

    /*
    public function createDate()
    {
        return $this->today;
    }
    */
}

$temperature = new Celsius(43);
print_r($temperature->convertTemp());

