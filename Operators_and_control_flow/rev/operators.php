<?php
// Operators

class Maths
{
    private $var1, $var2, $var3;

    public function  __construct($tempVar1, $tempVar2, $tempVar3)
    {
        $this->var1 = $tempVar1;
        $this->var2 = $tempVar2;
        $this->var3 = $tempVar3;
    }

    public function  add ()
    {
        return $this->var1 + $this->var2;
    }

    public function subtract()
    {
        $result = NULL;
        ($this->var1 >  $this->var2) ? $result = $this->var1 - $this->var2 : $result = $this->var2 - $this->var1;
        return $result;
    }

    public function  multiply()
    {
        $result = $this->var1 * $this->var2;
        return $result;
    }

    public function  divide()
    {
        $result = NULL;
        ($this->var1 > $this->var2) ? $result = $this->var1 / $this->var2 : $result = $this->var2 / $this->var1;
        return $result;
    }

    public function exponent()
    {
        return $this->var1**$this->var3;
    }

    public function modulus()
    {
        return $this->var1 % $this->var2;
    }

}

$result = new Maths(20,30, 3);
echo $result->add().PHP_EOL;
echo $result->subtract().PHP_EOL;
echo $result->multiply().PHP_EOL;
echo $result->divide().PHP_EOL;
echo $result->exponent().PHP_EOL;
echo $result->modulus().PHP_EOL;