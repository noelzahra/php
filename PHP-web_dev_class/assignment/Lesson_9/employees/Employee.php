<?php

//Employee class

class Employee
{
    protected $firstName;
    protected $lastName;
    protected $role;
    public static $counter = 0;

    const HOURS_PER_WEEK = 40;

    public function __construct(
        string $firstName,
        string $lastName,
        string $role
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->role = $role;
        self::$counter++;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getFullName()
    {
        $string = ucwords($this->firstName) . ' ';
        $string .= ucwords($this->lastName);

        return $string;
    }

    public function getRoleAndSalary()
    {
        $string = 'Employed as: ' . self::getRole();
        $string .= ' on €' . self::getAnnualSalary();
        
        return $string;
    }

    public function getWeeklySalary(): float
    {
        switch($this->getRole()){
            case 'manager':
                return round((37.78 * self::HOURS_PER_WEEK), 2);
            case 'software lead':
                return round((26.63 * self::HOURS_PER_WEEK), 2);
            case 'software developer':
                return 15 * self::HOURS_PER_WEEK;
            default:
                return 5 * self::HOURS_PER_WEEK;
        }
    }

    public function getAnnualSalary(): float
    {
        return round(($this->getWeeklySalary() * 52), 2);
    }

}
