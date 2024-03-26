<?php

class Employee
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->setSalary($salary); // Salary has been encapsulated
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    // using Encapsulation to set salary securely
    public function setSalary($salary)
    {
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            throw new Exception("Salary cannot be negative");
        }
    }
}


