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

    public function setMonth(int $month){
        $this->month = $month;
    }
    public function setDay(int $day){
        $this->day = $day;
    }
    public function setYear(int $year){
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

    public function DisplayDate(){
        return "$this->month/$this->day/$this->year";
    }


}
$test = new Date(12,24,2020);

echo $test->DisplayDate() . PHP_EOL;
