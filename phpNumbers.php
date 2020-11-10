<?php

$r = 3; //int
$pi = 3.14; //float

echo "Area = " . $pi * $r ** 2;

echo '<br/>';

echo 'Result = ' . 2 * (4 + 9) / 3;

echo '<br/>';

echo $r++;
echo ++$r+$r;

echo '<br/>';

//shorthand operators
$age = 20;
echo $age += 10;
echo '<br/>';
echo $age -= 5;
echo '<br/>';

//number funtions
echo floor($pi);

echo '<br/>';

echo ceil($pi);

echo '<br/>';

echo pi();
?>