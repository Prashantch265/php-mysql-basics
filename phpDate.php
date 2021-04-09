<?php
echo "Today is " . date("Y-m-d") . "<br/>";
echo "Today is " . date("Y.d.m") . "<br/>";
echo "Today is " . date("d/m/Y") . "<br/>";
echo "Today is " . date("l, m d, Y") . "<br/>";

echo "It's " . date("h:i a") . "<br/>";
echo "24 hr format " . date("H:i:s") . "<br/>";
echo "Nepal Time <br/>";
date_default_timezone_set("Asia/Kathmandu");
echo "It's " . date("h:i a") . "<br/>";

echo "Creating date by passing parameters <br/>";
$hour = 9;
$min = 20;
$sec = 45;
$month = 3;
$day = 29;
$year = 2021;
$date = mktime($hour, $min, $sec, $month, $day, $year);
echo date("Y-m-d, h:i:s a", $date);

echo "<br/>String to Date <br/>";
$string = "10:30pm March 15 2021";
echo date("Y-m-d, h:i:s a", strtotime($string));
?>