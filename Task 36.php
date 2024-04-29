<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function isLowercase($str) {
   
    if (empty($str)) {
        return false;
    }
    echo "<br>";
    
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] !== strtolower($str[$i])) {
            return false;
        }
    }
    
    return true;
}

$string1 = "Hello";
$string2 = "hello";
$string3 = "HELLO";

var_dump(isLowercase($string1)); 
var_dump(isLowercase($string2)); 
var_dump(isLowercase($string3)); 
?>

</body>
</html>