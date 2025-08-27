<?php
$va1 = "one";
$va2 = "two";
$va3 = "three";
$va4 = [$va1, $va2, $va3];
foreach ($va4 as $variable) {
    echo $variable . "<br>";
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($va4 as $element): ?>
            <li> <?= $element ?> </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>