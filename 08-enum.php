<?php
require 'StateType.php';
$state = StateType::READY;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php echo StateType::WAITING->value ?></p>
    <p><?= $state->labelOrOtherName() ?></p>
</body>

</html>