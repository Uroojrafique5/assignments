<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

$valueToDelete = "November";

foreach ($months as $key => $month) {
    if ($month == $valueToDelete) {
        unset($months[$key]);
    }
}

echo "Array after removing '$valueToDelete':<br>";
foreach ($months as $month) {
    echo "$month<br>";
}

?>

</body>
</html>