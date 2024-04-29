<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$currentDayOfWeek = date('w');

switch ($currentDayOfWeek) {
    case 0:
        $dayOfWeek = "Sunday";
        break;
    case 1:
        $dayOfWeek = "Monday";
        break;
    case 2:
        $dayOfWeek = "Tuesday";
        break;
    case 3:
        $dayOfWeek = "Wednesday";
        break;
    case 4:
        $dayOfWeek = "Thursday";
        break;
    case 5:
        $dayOfWeek = "Friday";
        break;
    case 6:
        $dayOfWeek = "Saturday";
        break;
    default:
        $dayOfWeek = "Unknown";
}

echo "Today is $dayOfWeek.";
?>

</body>
</html>