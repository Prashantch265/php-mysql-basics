<?php
include_once 'dbConnect.php';

$sql = "INSERT INTO users VALUES(1,'Prashant', '' ,'Chaudhary', 19)";

if (mysqli_query($conn, $sql)){
    echo "Inserted Successfully";
}else{
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>