<?php

class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function setMonth(int $month): void
    {
        $this->month = $month;
    }

    public function setDay(int $day): void
    {
        $this->day = $day;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function DisplayDate(): string
    {
        return "$this->month/$this->day/$this->year";
    }


}


$test = new Date(12, 31, 2020);

if (checkdate($test->getMonth(), $test->getDay(), $test->getYear())) {
    echo $test->DisplayDate() . PHP_EOL;
} else {
    echo 'Invalid date' . PHP_EOL;
}



