<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "mydb";

$conn = mysqli_connect($server, $user, $password, $db) or die("Couldn't connect");

$sql = "DELETE FROM users WHERE uid = 2";

if(mysqli_query($conn, $sql)){
    echo "User deleted";
}else{
    echo mysqli_error($conn);
}

mysqli_close($conn);

?>