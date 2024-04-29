<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
date_default_timezone_set("Asia/Karachi");

$currentHour = date('G');

if ($currentHour < 12) {
    echo "Good Morning";
} else {
    echo "Good Afternoon";
}
?>


</body>
</html>