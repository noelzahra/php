<?php
//Arithmetic operators

class Maths
{
    private $var1;
    private $var2;
    private $var3;

    public function __construct( $var1, $var2, $var3)
    {
        $this->var1 = $var1;
        $this->var2 = $var2;
        $this->var3 = $var3;
    }

    public function add()
    {
        return $this->var1 + $this->var2;
    }

    public function subtract()
    {
        return ($this->var1 > $this->var2) ? $this->var1 - $this->var2 : $this->var2 - $this->var1;
    }

    public function multiply()
    {
        return $this->var1 + $this->var2;
    }

    public function divide()
    {
        return ($this->var1 < $this->var2) ? $this->var2 / $this->var1 : $this->var1 / $this->var2;
    }

    public function modulus()
    {
        return $this->var1 % $this->var2;
    }

    public function exponentiate()
    {
        return $this->var1 ** $this->var3;
    }
}

$result = new Maths(4, 10, 3);
echo $result->add() . "\n";
echo $result->subtract() . "\n";
echo $result->multiply() . "\n";
echo $result->divide() . "\n";
echo $result->modulus() . "\n";
echo $result->exponentiate() . "\n";