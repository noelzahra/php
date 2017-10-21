<?php
class Employee {
    
    private $name;
    private $surname;
    
    public function __construct($name, $surname)//superclass method
    {
        //echo "Construct func is called by default";
        $this->name = $name;
        $this->surname = $surname;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($n) {
        $this->name = $n;
    }
    
    public function save() {
        $name = $this->name;
        $surname = $this->surname;
        
        $sql = "INSERT INTO employee (name, surname) VALUES". "('$name', '$surname')";
        
        echo '<br><br>' . $sql ;
    }
}

class Consultant extends Employee {
    
}

class Fulltimer extends Employee {

}

$person = new Employee('Pierre', 'Zahra');
echo $person->save() . '<br><br>';
$person2 = new Consultant('Scott', 'Bjorn');
echo $person2->getName() . '<br><br>';

class Animal {
    public $name;
    
    public function makeNoise() {
        echo "No particular noises<br><br>";
    }
}


class Dog extends Animal {
    public function makeNoise() {
        echo "Woof, woof<br><br>";
    }
}

class Tiger extends Animal {}

class Fox extends Animal {
    public function makeNoise() {
        echo "What does the fox say<br>";
    }
}

$a = new Animal();
$a->makeNoise();

$b = new Tiger();
$b->makeNoise();

$c = new Fox();
$c->makeNoise();