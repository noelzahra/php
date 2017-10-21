<?php

$employee = ['name'=>'Noel', 'surname'=>'Zahra'];

echo 'name:' . $employee['name'] . ' surname: ' . $employee['surname'];

echo nl2br('<br><br>Functional way<br><br>');
function saveEmployee($employee)
{
    $name = $employee['name'];
    $surname = $employee['surname'];
    
    $sql = "INSERT INTO employee (name, surname) VALUES". "('$name', '$surname')";
    
    echo $sql;
}
saveEmployee($employee);

echo nl2br('<br><br>OOP<br><br>');

class Employee {
    
    public $name;
    public $surname;
    
    public function save() {
        $name = $this->name;
        $surname = $this->surname;
        
        $sql = "INSERT INTO employee (name, surname) VALUES". "('$name', '$surname')";
        
        echo $sql;
    }
}

$emp2 = new Employee();
$emp2->name = "Scott";
$emp2->surname = "Bjorn";
$emp2->save();