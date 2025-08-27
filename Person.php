<?php
class Person
{
    public function __construct(
        private string $name,
        private string $lastName,
        private int $age,
        private array $courses,
    ) {}

    //como se trata el objeto cuando se lo usa como string
    public function __toString()
    {
        $html = "<h1>{$this->name}</h1>";
        $html .= "<h1>{$this->lastName}</h1>";
        return $html;
    }

    public function __get($searched)
    {
        if (property_exists($this, $searched)) {
            return $this->$searched;
        }
        return null;
    }
    public function addCourse($course): void
    {
        $this->courses = $course;
    }
}
