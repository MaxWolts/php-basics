<?php
$this2 = true;
$status = $this2 ? "es verdad" : "es falso";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (false) {
        echo "<p>Esto es verdad</p>";
    } else {
        echo "<p>Esto no es verdad</p>";
    }
    ?>

    <?php if ($this2): ?>
        <p>Estos es verdad</p>
    <?php else: ?>
        <p>Esto es falso</p>
    <?php endif; ?>
    <p>
        Esto es el estatus: <?= $status ?>
    </p>

    <?php ?>
</body>

</html>