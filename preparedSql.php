<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "mydb";

$conn = mysql_connect($server, $user, $password, $db) or die("Unable to connect");

$format = $conn->prepare("INSERT INTO user(fname, mname, lname, age) values(?,?,?,?)");

$format->bindParam("sssi", $fname, $mname, $lname, $age);

$fname = "Sabin";
$lname = "Sapkota";
