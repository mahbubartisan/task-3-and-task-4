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

// Example usage
try {
    $employee1 = new Employee("Mahbub", 50000);
    echo "Employee: " . $employee1->getName() . "\n";
    echo "Current Salary: $" . $employee1->getSalary() . "\n";

    // Attempt to set negative salary (will throw an exception)
    $employee1->setSalary(-1000);

    // Set new salary
    $employee1->setSalary(55000);
    echo "New Salary: $" . $employee1->getSalary() . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
