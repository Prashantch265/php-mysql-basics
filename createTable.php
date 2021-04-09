<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "mydb";

$conn = mysqli_connect($server, $username, $password, $db);

if(!$conn)
    die("Connection failed: " . mysqli_connect_error());

    $sql = "CREATE TABLE users(id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(20) NOT NULL,
    mname VARCHAR(20),
    lname VARCHAR(20) NOT NULL,
    age int NOT NULL)";

if(mysqli_query($conn,$sql)){
    echo "Table created Successfully";
}else{
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>