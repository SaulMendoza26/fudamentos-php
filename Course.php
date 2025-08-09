<?php
class Course
{

    public function __construct(
        private string $name,
        private string $description,
        private string $Teacher,
        private int $studentCount
    ) {

    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}


?>