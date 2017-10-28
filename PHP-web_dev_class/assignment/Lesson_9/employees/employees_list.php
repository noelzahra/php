<?php
include 'Employee.php';

$emp1 = new Employee('Larry', 'Page', 'manager');
$emp2 = new Employee('Joyce', 'James', 'software lead');
$emp3 = new Employee('Matt', 'Fitzgerald', 'software developer');
$emp4 = new Employee('Tina', 'Strong', 'junior software developer');

$employees = [ $emp1, $emp2, $emp3, $emp4 ];