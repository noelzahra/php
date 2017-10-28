<?php
class Employee {
    
    private $name;
    private $surname;
    private $leaveTaken;
    public static $numberOfEmployees;//static used 
    
    const NUM_OF_LEAVE_DAYS = 24;

    public function __construct($name, $surname, $leaveTaken)//superclass method
    {
        //echo "Construct func is called by default";
        $this->name = $name;
        $this->surname = $surname;
        $this->leaveTaken = $leaveTaken;
        self::$numberOfEmployees++;
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
    
    public function getAvailableLeave() {
        return self::NUM_OF_LEAVE_DAYS - $this->leaveTaken . ' days';
    }
}

$emp2 = new Employee('Scott', 'Zahra', 4);
$emp3 = new Employee('Marina', 'Kozovic', 8);

echo $emp2->getName();
echo '<br><br>';
echo $emp3->getName();
echo '<br><br>';
echo $emp2->getAvailableLeave();
echo '<br><br>';
echo $emp3->getAvailableLeave();
echo '<br><br>';
echo 'Class static: ' . Employee::$numberOfEmployees;
echo '<br><br>';
echo 'Object: ' . $emp2::$numberOfEmployees;