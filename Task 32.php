<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$rows = 8; 

$row = 1;
$star = '*';

while ($row <= $rows) {
    $column = 1;
    echo "<br>";

    while ($column <= $row) {
        echo $star; 
        $column++;
    }
    echo "\n"; 
    $row++;
}

?>
</body>
</html>