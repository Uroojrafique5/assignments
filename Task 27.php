<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
echo "Using for loop:\n";
for ($i = 5; $i <= 15; $i++) {
    echo $i . "\n";
}
echo "<br>";

echo "\nUsing while loop:\n";
$i = 5;
while ($i <= 15) {
    echo $i . "\n";
    $i++;
}
echo "<br>";

echo "\nUsing do-while loop:\n";
$i = 5;
do {
    echo $i . "\n";
    $i++;
} while ($i <= 15);
?>

</body>
</html>
