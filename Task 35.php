<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function customSort(&$array) {
    echo "<br>";
    sort($array);
}

$array = [3, 1, 5, 2, 4];
customSort($array);
print_r($array);
?>
</body>
</html>