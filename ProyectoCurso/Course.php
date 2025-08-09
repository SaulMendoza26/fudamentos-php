<?php
require 'Teacher.php';
class Course
{

    public function __construct(
        public string $name,
        public Teacher $teacher,
    ) {

    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getTeacher(): Teacher
    {
        return $this->teacher;
    }
    public function setTeacher(Teacher $teacher): void
    {
        $this->teacher = $teacher;
    }
    public function setName(string $name): void{
        $this->name = $name;
    }
    public function __toString(): string    {
        return "The name is".$this->name. " and teacher". $this->teacher->getName();
    }
}

?>