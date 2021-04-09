<?php

include_once "../dbConnect.php";

$sql = "DELETE FROM users WHERE id = '".$_GET['id']."'";

if(mysqli_query($conn, $sql)){
    echo "User Deleted";
}else{
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>