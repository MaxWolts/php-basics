<?php
class Person
{
    private string $name;
    private string $lastName;
    private int $age;

    public function __construct($name, $lastName, $age)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getLastName(): string
    {
        return $this->lastName;
    }
    public function getAge(): string
    {
        return $this->age;
    }
}
$person = new Person('Max', 'Wolts', 100);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>

<body>

    <p><?= $person->getName() ?></p>
    <p><?= $person->getLastName() ?></p>
    <p><?= $person->getAge() ?></p>

</body>

</html>