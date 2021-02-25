<?php

class Student
{
    private string $name;
    private int $age;
    public int $grade;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
        $this->setGrade($this->calculateGrade());
    }

    public function getGrade(int $grade = 1): void
    {
        $this->grade = $grade;
    }

    public function setGrade(int $grade): void
    {
        $this->grade = $grade;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }


    public function calculateGrade(): int
    {
        if ($this->age >= 7 && $this->age <= 8) {
            return $this->grade = 1;
        } elseif ($this->age >= 9 && $this->age <= 10) {
            return $this->grade = 2;
        } elseif ($this->age >= 11 && $this->age <= 12) {
            return $this->grade = 3;
        } elseif ($this->age >= 13 && $this->age <= 14) {
            return $this->grade = 4;
        } elseif ($this->age >= 15 && $this->age <= 16) {
            return $this->grade = 5;
        } elseif ($this->age >= 17 && $this->age <= 18) {
            return $this->grade = 6;
        } else {
            return $this->grade = 0;
        }
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

}

$john = new Student('Jānis', 8);
$peter = new Student('Pēteris', 12);
$july = new Student('Jūlija', 17);

class School
{

    private string $name;
    private array $students = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addStudent(Student $student): void
    {
        $this->students[] = $student;
    }

    public function addManyStudents(array $students): void
    {
        foreach ($students as $student) {
            $this->addStudent($student);
        }
    }

    public function getAllStudents(): array
    {
        return $this->students;
    }

    public function getStudentsInGrade(int $grade): array

    {
        return array_filter($this->students,function (Student $student) use($grade){
            return $student->getGrade() === $grade;
        });
    }
}

$school = new School('RVT');
$school->addStudent(new Student('Janis', 18));
$school->addStudent(new Student('Eriks', 14));
$school->addStudent(new Student('Ivo', 11));
$school->addStudent(new Student('Olafs', 7));

foreach ($school->getStudentsInGrade(3) as $student){
    echo $student->getName() . ' ' . $student->getGrade() . PHP_EOL;
}