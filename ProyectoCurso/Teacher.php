<?php
class Teacher
{
    public function __construct(
        private string $name,
        private string $email,
        private string $title
    ) {
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getSpeciality(): string
    {
        return $this->title;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function setSpeciality(string $title): void
    {
        $this->title = $title;
    }
}
?>