<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "mydb";

$conn = mysqli_connect($server, $user, $password, $db) or die("Unable to connect");

$sql = "UPDATE users SET fname = 'Ujjwol', lname = 'Bhatta', age = 19 where id = 2";

if(mysqli_query($conn, $sql)){
    echo "Updated successfully";
}else{
    echo mysqli_error($conn);
}

mysqli_close($conn);

?>