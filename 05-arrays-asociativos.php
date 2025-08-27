<?php
$data = [
    'title' => 'This is a title',
    'subtitle' => 'This is a subtitle',
    'description' => ' this is a description very long'
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
</head>

<body>
    <h1><?= $data['title'] ?></h1>
    <h2><?= $data['subtitle'] ?></h2>
    <p><?= $data['description'] ?></p>
</body>

</html>