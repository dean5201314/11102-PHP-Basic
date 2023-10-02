<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XAMPP HOST</title>
</head>
<body>
<?php
// define('age',30);
$age=40;
$age=50;
echo $age;
// echo age;
$name="蕭智仁";
echo $name;

// print "\n";
// $age=60;
// print $age.$name;

$tmp=$age;
$age=$name;
$name=$tmp;
echo $age;
echo $name;


?>
</body>
</html>