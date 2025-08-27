<?php
require 'Person.php';
$person = new Person('Max', 'Wolts', 100, ["w"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>

<body>

    <p><?= $person->name ?></p>
    <p><?= $person->lastName ?></p>
    <p><?= $person->age ?></p>
    <p><?= $person ?></p>
</body>

</html>