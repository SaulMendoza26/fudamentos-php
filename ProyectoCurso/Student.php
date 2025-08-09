<?php
require_once "Course.php";
class Student
{
    
    public function __construct(
        private String $name,
        private String $lastName,
        private String $email,
        private String $phone,
        private Course $Course
    ) {

    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPhone(): string
    {
        return $this->phone;
    }
    public function getCourse(): Course
    {
        return $this->Course;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }
    public function setCourse(Course $course): void
    {
        $this->Course = $course;
    }
    public function __toString(): string{
        return $this->name ." ". $this->lastName ." ". $this->email ." ". $this->phone ." ". $this->Course;
    }
}
?>