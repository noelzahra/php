<?php
//Arithmetic operators

class Maths
{
    private $var1;
    private $var2;
    private $var3;

    public function __construct( $tempVar1, $tempVar2, $tempVar3 )
    {
        $this->var1 = $tempVar1;
        $this->var2 = $tempVar2;
        $this->var3 = $tempVar3;
    }

    public function add()
    {
        echo "Sum of $this->var1 + $this->var2: ";
        return $this->var1 + $this->var2;
    }

    public function subtract()
    {
        $result = null;
        echo "Subtraction: ";
        if ($this->var2 > $this-> var1) {
            $result =  $this->var2 - $this->var1;
        } else {
            $result = $this->var1 - $this->var2;
        }
        return $result;
    }

    public function mulitply ()
    {
        echo "Mulitply $this->var1 by $this->var2: ";
        return $this->var1 * $this->var2;
    }

    public function divide ()
    {
        $result = null;
        echo "Divide $this->var1 by $this->var2: ";
        if ( $this->var1 > $this->var2 ) {
            $result = $this->var1 / $this->var2;
        } else {
            $result = $this->var2 / $this->var1;
        }
        return $result;
    }

    public function modulus() {
        echo "Modulus, returns remaining int: ";
        return $this->var1 % $this->var2;
    }

    public function exponentiate ()
    {
        echo"Exponential power of $this->var3 is:\n";
        return $this->var1**$this->var3;
    }

}

$newSum = new Maths(5, 4, 3);
echo $newSum->add().PHP_EOL;
echo $newSum->subtract().PHP_EOL;
echo $newSum->mulitply().PHP_EOL;
echo $newSum->divide().PHP_EOL;
echo $newSum->modulus().PHP_EOL;
echo "Use modulus to determine if number is odd or even using %2\n";
echo $newSum->exponentiate();