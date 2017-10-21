<?php

//Polymorphism

class Animal
{
    public function nameIs()
    {
        return 'Animal';
    }
    
    public function getName()
    {
        echo "Polymorphic with \$this instance var: " . $this->nameIs() . "<br><br>";
    }
}

class Dog extends Animal
{
    public function nameIs()
    {
        return 'Dog';
    }
}

$a = new Dog;
$a->getName();


class Activity
{
    public function nameIs()
    {
        return 'Running';
    }
    
    public function getName()
    {
        echo "Polymorphic behaviour is switched off with self: " . self::nameIs() . "<br><br>";
    }
}

class Trek extends Activity
{
    public function nameIs() 
    {
        return 'Trek';
    }
}

$b = new Trek;
$b->getName();