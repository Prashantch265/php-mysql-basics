<?php

$name = 'Prashant';
$age = 19;

define('SEX', 'Male');  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    My name is <?php echo $name?>
    <br/>
    I am <?php echo $age?> years old.
    <br/>
    Gender: <?php echo SEX //constant?>
</body>
</html>