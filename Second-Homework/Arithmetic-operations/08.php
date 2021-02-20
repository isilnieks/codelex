<?php

class Employee
{
    public $name;
    public $basePay;
    public $hoursWorked;
    const MINIMUM_HOURLY_RATE = 8;
    const MAX_HOURS_PER_WEEK = 60;
    const HOURS_FOR_OVERTIME = 8;
    const OVERTIME_RATE = 1.5;

    public function __construct(string $name, float $basePay, int $hoursWorked)
    {
        $this->name = $name;
        $this->basePay = $basePay;
        $this->hoursWorked = $hoursWorked;
    }

    public function salaryCalculator()
    {
        if ($this->basePay < self::MINIMUM_HOURLY_RATE || $this->hoursWorked > self::MAX_HOURS_PER_WEEK) {
            return 'Error';
        }
        if ($this->hoursWorked > self::HOURS_FOR_OVERTIME) {
            return ($this->basePay * self::HOURS_FOR_OVERTIME) + ($this->basePay * ($this->hoursWorked * self::HOURS_FOR_OVERTIME) * self::OVERTIME_RATE);
        } else {
            return $this->basePay * $this->hoursWorked;
        }
    }
}

$employees = [
    new Employee('Ivo', 7.50, 35),
    new Employee('Mikus', 8.20, 47),
    new Employee('Renars', 10.00, 73),
];

foreach ($employees as $employee) {
    echo $employee->name . ' salary: ' . $employee->salaryCalculator() . PHP_EOL;
}